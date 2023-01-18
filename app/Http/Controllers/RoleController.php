<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(): Factory|View|Application
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('pages.configuration.roles.index', compact('roles', 'permissions'));
    }

    public function create(): Factory|View|Application
    {
        return view('pages.configuration.roles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return back()->with('toast_success', Lang::get('role.create_message'));
    }

    public function edit(Role $role): Factory|View|Application
    {
        return view('pages.configuration.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);

        return back()->with('toast_success', Lang::get('role.update_message'));
    }

    public function destroy(Role $role): RedirectResponse
    {
        $role->delete();

        return back()->with('toast_success', Lang::get('role.delete_message'));
    }

}
