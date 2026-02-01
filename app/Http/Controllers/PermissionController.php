<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permission.show', compact('permissions'));
    }
    public function create()
    {
        return view('permission.create');
    }
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
        ]);

        // Create permission
        Permission::create([
            'name' => $request->name
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Permission added successfully!');
    }
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('permission.edit', compact('permission'));
    }
    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
        ]);

        $permission->update(['name' => $request->name]);

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully!');
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully!');
    }
}
