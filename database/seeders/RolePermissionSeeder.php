<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $dashboardPermission = Permission::firstOrCreate([
            'name' => 'view dashboard',
            'guard_name' => 'web',
        ]);
        // Role
        $superAdmin = Role::firstOrCreate([
            'name' => 'SuperAdmin',
            'guard_name' => 'web',
        ]);
        // Assign permission to role
        $superAdmin->givePermissionTo($dashboardPermission);
        $user = User::first();
        if ($user && !$user->hasRole('SuperAdmin')) {
            $user->assignRole($superAdmin);
        }
    }
}
