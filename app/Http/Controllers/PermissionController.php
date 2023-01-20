<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller
{
    public function index(): Factory|View|Application
    {
        $permissions = Permission::all();
        return view('pages.configuration.permission.index', compact('permissions'));
    }

    public function create(): Factory|View|Application
    {
        return view('pages.configuration.permission.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => 'required']);
        Permission::create($validated);
        Alert::success('Permission Add successfully!');
        return back()->with('toast_success', Lang::get('permission.create_message'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Permission $permission): Factory|View|Application
    {
        return view('pages.configuration.permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission): RedirectResponse
    {
        $validated = $request->validate(['name' => 'required']);
        $permission->update($validated);
        Alert::success('Permission Updating!');
        return back()->with('toast_success', Lang::get('permission.update_message'));
    }

    public function destroy(Permission $permission): RedirectResponse
    {
        $permission->delete();
        Alert::success('Permission Deleting!');
        return back()->with('toast_success', Lang::get('permission.delete_message'));
    }
}
