<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Role

        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEmployee = Role::create(['name' => 'employee']);


        // Permission List as Array
        $permissions = [

            // Role Permission
        'role.create',
        'role.view',
        'role.edit',
        'role.delete',
        'role.approve',

            // Admin Permission
        'admin.create',
        'admin.view',
        'admin.edit',
        'admin.delete',
        'admin.approve',

            // Department Permission
        'department.create',
        'department.view',
        'department.edit',
        'department.delete',

        ];
        // Assign Permission

        for ($i=0; $i < count($permissions); $i++){
            $permission = Permission::create(['name' => $permissions[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);

        }

    }
}
