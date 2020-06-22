<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
              'name' => 'admin',
              'phone' => '123456789',
              'email' => 'admin@admin.com',
              'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nenad',
            'email' => 'nenad.pesic32@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
