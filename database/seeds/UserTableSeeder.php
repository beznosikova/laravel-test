<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'admin')->first();
        $role_manager  = Role::where('name', 'manager')->first();

        $employee = new User();
        $employee->name = 'Admin Name';
        $employee->email = 'admin@example.com';
        $employee->password = Hash::make('secret');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $manager = new User();
        $manager->name = 'Manager Name';
        $manager->email = 'manager@example.com';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
