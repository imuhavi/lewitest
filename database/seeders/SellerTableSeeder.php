<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;

class SellerTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Seller::create([
      'user_id' => '2',
      'shop_name' => 'Demoshop1',
      'primary_phone' => '0123456789',
      'secondary_phone' => '01282932990',
      'email' => 'seller-1@demo.com',
      'shop_location' => 'Khobar City',
      'shop_address' => 'King Abdulaziz Road-123',
      'city' => 'Dammam'
    ]);

    Seller::create([
      'user_id' => '3',
      'shop_name' => 'Demoshop2',
      'primary_phone' => '01234567879',
      'secondary_phone' => '01282932968',
      'email' => 'seller-2@demo.com',
      'shop_location' => 'Khobar City',
      'shop_address' => 'King Abdulaziz Road-125',
      'city' => 'Dammam'
    ]);
  }
}
