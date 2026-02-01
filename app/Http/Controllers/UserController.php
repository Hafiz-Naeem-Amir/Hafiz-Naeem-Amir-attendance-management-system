<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\Designation;
use App\Models\Franchise;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function __construct()
    {
        $this->middleware('permission:view users')->only(['index']);
        $this->middleware('permission:create users')->only(['create', 'store']);
        $this->middleware('permission:edit users')->only(['edit', 'update']);
        $this->middleware('permission:delete users')->only(['destroy']);
    }


    public function index()
    {
        $users = User::latest()->paginate(10);
        $roles = Role::all();
        $designations = Designation::all();
        return view('attendance-system.user.user', compact('users', 'designations', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designations = Designation::all();
        $franchises = Franchise::all();
        $roles = Role::all();
        $users = User::all();
        $permissions = Designation::all();
        return view('attendance-system.user.add-user', compact('users', 'roles', 'permissions', 'designations', 'franchises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|string|min:6|confirmed',
    //         'designation_id' => 'nullable|exists:designations,id',
    //         'status' => 'required|in:0,1',
    //         'roles' => 'required|array|min:1',
    //         'roles.*' => 'exists:roles,name',
    //         'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    //     ]);

    //     // Image upload
    //     $imagePath = null;
    //     if ($request->hasFile('profile_image')) {
    //         $imagePath = $request->file('profile_image')
    //             ->store('users', 'public');
    //     }

    //     // Create user
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'designation_id' => $request->designation_id,
    //         'status' => $request->status,
    //         'profile_image' => $imagePath,
    //     ]);

    //     // Assign roles (Spatie)
    //     $user->assignRole($request->roles);

    //     return redirect()
    //         ->route('users.index')
    //         ->with('success', 'User created successfully with roles!');
    // }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'phone' => 'nullable|string|max:20',
            'hire_date' => 'nullable|date',
            'designation_id' => 'nullable|exists:designations,id',
            'franchise_id' => 'nullable|exists:franchises,id',
            'status' => 'nullable|boolean',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,name',
        ]);

        $data = $request->only([
            'name',
            'email',
            'password',
            'phone',
            'hire_date',
            'designation_id',
            'franchise_id',
            'status',
        ]);

        // Profile image
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }

        // Create user
        $user = User::create($data);

        // Assign roles
        if ($request->has('roles')) {
            $user->syncRoles($request->roles);
        }

        return redirect()->route('users.index')->with('success', 'Employee created successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::with(['roles', 'designation', 'franchise'])->findOrFail($id);
        $roles = Role::all();
        $designations = Designation::all();
        $franchises = Franchise::all();

        return view('attendance-system.user.edit', compact('user', 'roles', 'designations', 'franchises'));
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:6',
            'phone' => 'nullable|string|max:20',
            'hire_date' => 'nullable|date',
            'designation_id' => 'nullable|exists:designations,id',
            'franchise_id' => 'nullable|exists:franchises,id',
            'status' => 'nullable|boolean',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,name',
        ]);

        $data = $request->only([
            'name',
            'email',
            'phone',
            'hire_date',
            'designation_id',
            'franchise_id',
            'status',
        ]);

        // 🔐 Password (sirf tab update ho jab bhara ho)
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        // 🖼 Profile image
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')
                ->store('profile_images', 'public');
        }

        // Update user
        $user->update($data);

        // 🎭 Roles sync
        if ($request->has('roles')) {
            $user->syncRoles($request->roles);
        } else {
            $user->syncRoles([]); // agar koi role unchecked ho
        }

        return redirect()
            ->route('users.index')
            ->with('success', 'Employee updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // 🖼 Delete profile image if exists
        if ($user->profile_image && Storage::disk('public')->exists($user->profile_image)) {
            Storage::disk('public')->delete($user->profile_image);
        }


        $user->syncRoles([]);


        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully!');
    }
}
