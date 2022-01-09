<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'role' => 'Admin',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Mr. Customer',
            'email' => 'customer@customer.com',
            'email_verified_at' => now(),
            'role' => 'Customer',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Mr. Customer 2',
            'email' => 'customer2@customer.com',
            'email_verified_at' => now(),
            'role' => 'Customer',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Mr. Customer 3',
            'email' => 'customer3@customer.com',
            'email_verified_at' => now(),
            'role' => 'Customer',
            'password' => bcrypt('12345678')
        ]);
    }
}