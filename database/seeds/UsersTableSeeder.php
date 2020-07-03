<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();

        \App\User::create([
            "name"     => 'Admin',
            "username" => "admin",
            "email"    => 'ddtoan0512@gmail.com',
            "password" => \Illuminate\Support\Facades\Hash::make('12345678')
        ]);
    }
}
