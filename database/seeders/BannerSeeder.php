<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Banner::create([
      'id' => '1',
      'category_id' => '1',
      'title' => 'Mens Shopping',
      'position' => 'one',
      'banner' => '',
      'status' => 'Active',
    ]);

    Banner::create([
      'id' => '2',
      'category_id' => '2',
      'title' => 'Womens Shopping',
      'position' => 'two',
      'banner' => '',
      'status' => 'Active',
    ]);


    Banner::create([
      'id' => '3',
      'category_id' => '3',
      'title' => 'Accesories',
      'position' => 'three',
      'banner' => '',
      'status' => 'Active',
    ]);
  }
}
