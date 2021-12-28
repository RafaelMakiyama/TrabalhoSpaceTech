<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        /**
         * @var Role $role 
         */
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'teacher']);
        $role = Role::create(['name' => 'student']);
        
    }
}
