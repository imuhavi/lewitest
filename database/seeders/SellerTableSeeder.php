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
      'user_id' => 1,
      'shop_name' => 'Etc Store',
      'primary_phone' => '0293283490',
      'email' => 'etc.support@store.com',
      'shop_location' => 'Sihat',
      'shop_address' => 'King abdulaziz Road',
      'city' => 'Dammam',
      'country' => 'Saudi Arabia'
    ]);
  }
}
