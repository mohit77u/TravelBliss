<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
       app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        //    Permission::create(['name' => 'edit articles']);
        //    Permission::create(['name' => 'delete articles']);
        //    Permission::create(['name' => 'publish articles']);
        //    Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions

        // this can be done as separate statements
        Role::create([
           'name' => 'admin',
        ]);

        Role::create([
            'name' => 'super_admin',
         ]);
    //    $role->givePermissionTo('edit articles');

       // or may be done by chaining
        Role::create([
            'name' => 'user',
        ]);
    }
}
