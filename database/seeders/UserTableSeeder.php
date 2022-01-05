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
            'name' => 'Mr. Seller',
            'email' => 'seller@seller.com',
            'email_verified_at' => now(),
            'role' => 'Seller',
            'password' => bcrypt('12345678')
        ]);
    }
}
