<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index(): Factory|View|Application
    {
        $users = User::all();
        $roles = Role::pluck('name','name')->all();

        return view('pages.configuration.user.index', compact('users','roles'));
    }

    public function create(): Factory|View|Application
    {
        $roles = Role::pluck('name','name')->all();
        $permissions = Permission::pluck('name','name')->all();
        return view('pages.configuration.user.create',compact('roles','permissions'));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $user->givePermissionTo($request->input('permissions'));

        return redirect()->route('users.index')
            ->with('toast_success',Lang::get('user.create_message'));
    }

    public function show(User $user): Factory|View|Application
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('pages.configuration.user.role', compact('user', 'roles', 'permissions'));
    }

    public function edit($id): Factory|View|Application
    {
        $user = User::findOrFail(decrypt($id));
        $roles = Role::pluck('name','name')->all();
        $permissions = Permission::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $userPermission = $user->permissions->pluck('name','name')->all();

        return view('pages.configuration.user.edit',compact('user','roles','userRole', 'permissions', 'userPermission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $input = $request->all();
        $user = User::findOrFail($id);
        $user->update($input);
        if($request->input('roles') != null ){
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            DB::table('model_has_permissions')->where('model_id',$id)->delete();
            $user->assignRole($request->input('roles'));
            $user->givePermissionTo($request->input('permissions'));
        }

        return  back()->with('toast_success',Lang::get('user.update_message'));
    }

    public function destroy(User $user): RedirectResponse
    {
        if ($user->hasRole('admin')) {
            return back()->with('toast_success',  Lang::get('role.is_admin_message'));
        }
        $user->delete();

        return back()->with('toast_error', Lang::get('user.delete_message'));
    }

}
