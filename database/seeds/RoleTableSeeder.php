<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Người quản trị hệ thống',
        ]);

        DB::table('roles')->insert([
            'name' => 'Manager',
            'slug' => 'manager',
            'description' => 'Người quản lý của hệ thống',
        ]);

        DB::table('roles')->insert([
            'name' => 'Normal User',
            'slug' => 'normal',
            'description' => 'Người dùng hệ thống',
        ]);
    }
}
