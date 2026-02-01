<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->orderBy('name', 'ASC')->get();

        return view('roles.show', compact('roles'));
    }
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id', // make sure these IDs exist
        ]);

        // Create role
        $role = Role::create(['name' => $request->name]);

        // Assign permissions using Permission models
        $permissions = Permission::whereIn('id', $request->permissions)->get();
        $role->syncPermissions($permissions);

        return redirect()->route('roles.create')
            ->with('success', 'Role created successfully with permissions.');
    }
    public function edit($id)
    {
        // Get the role
        $role = Role::findOrFail($id);

        // Get all permissions
        $permissions = Permission::all();

        // Pass to view
        return view('roles.edit', compact('role', 'permissions'));
    }
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id', // ensure valid IDs
        ]);

        // Update role name
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();

        // Sync permissions using IDs
        $permissions = Permission::whereIn('id', $request->permissions)->get();
        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully!');
    }
    public function destroy($id)
    {
        // Find the role
        $role = Role::findOrFail($id);

        // Remove all permissions (optional, but cleaner)
        $role->syncPermissions([]);

        // Delete the role
        $role->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully!');
    }
}
