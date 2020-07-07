<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::where('slug','admin')->first();
        $manager_role = Role::where('slug', 'manager')->first();
        $normal_role = Role::where('slug', 'normal')->first();


        $admin = User::create([
            "name"     => 'Admin',
            "username" => "admin",
            "email"    => 'ddtoan0512@gmail.com',
            "password" => \Illuminate\Support\Facades\Hash::make('12345678')
        ]);

        $admin->roles()->attach($admin_role);

        $manager = User::create([
            "name"     => 'Manager',
            "username" => "manager",
            "email"    => 'manager@gmail.com',
            "password" => \Illuminate\Support\Facades\Hash::make('12345678')
        ]);

        $manager->roles()->attach($manager_role);

        $normal = User::create([
            "name"     => 'Normal',
            "username" => "normal",
            "email"    => 'normal@gmail.com',
            "password" => \Illuminate\Support\Facades\Hash::make('12345678')
        ]);

        $normal->roles()->attach($normal_role);
    }
}
