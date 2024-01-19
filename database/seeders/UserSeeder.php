<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_data = [

            // Admin

            [
                'full_name' => 'Kiran Admin',
                'username' => 'Admin',
                'email' => 'admin@sutra.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'status' => 'active'
            ],

            // Customer

            [
                'full_name' => 'Kiran Customer',
                'username' => 'Customer',
                'email' => 'customer@sutra.com',
                'password' => Hash::make('customer123'),
                'role' => 'customer',
                'status' => 'active'
            ],

        ];

        DB::table('users')->insert($user_data);
    }
}
