<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create(['name' => 'admin']);
        $opManagerRole = Role::create(['name' => 'op_manager']);
        $personalRole = Role::create(['name' => 'personal']);
        $corporateRole = Role::create(['name' => 'corporate']);
        $studentRole = Role::create(['name' => 'student']);

        $counterPermission = Permission::create(['name' => 'user.create'])->syncRoles([$adminRole, $opManagerRole]);
        $counterPermission = Permission::create(['name' => 'user.list'])->syncRoles([$adminRole, $opManagerRole]);
        $counterPermission = Permission::create(['name' => 'user.delete'])->syncRoles([$adminRole, $opManagerRole]);
        $counterPermission = Permission::create(['name' => 'user.update'])->syncRoles([$adminRole, $opManagerRole, $personalRole, $corporateRole, $studentRole]);
        $counterPermission = Permission::create(['name' => 'report.generate'])->syncRoles([$adminRole, $opManagerRole]);
        $counterPermission = Permission::create(['name' => 'product.create'])->syncRoles([$adminRole, $opManagerRole]);
        $counterPermission = Permission::create(['name' => 'product.list'])->syncRoles([$adminRole, $opManagerRole, $personalRole, $corporateRole, $studentRole]);
        $counterPermission = Permission::create(['name' => 'product.delete'])->syncRoles([$adminRole, $opManagerRole, $personalRole, $corporateRole, $studentRole]);
        $counterPermission = Permission::create(['name' => 'product.update'])->syncRoles([$adminRole, $opManagerRole, $personalRole, $corporateRole, $studentRole]);
    }
}
