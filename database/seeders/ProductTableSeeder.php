<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Product::create([
      'id' => 1,
      'seller_id' => 2,
      'category_id' => 3,
      'sub_category_id' => 3,
      'brand_id' => 3,
      'name' => 'Mens T-shir Red-1',
      'slug' => 'mens-t-shir-red-1',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure minus cum provident dolorum, rerum maiores blanditiis. Culpa, itaque cum. Cumque nobis vitae nihil molestiae!',
      'thumbnail' => 'thumbnail.jpeg',
      'status' => 'Active',
      'purchase_price' => 345,
      'discount_type' => 3,
      'discount' => 3,
      'shipping_cost' => 3,
      'shipping_days' => 3,
      'category_id' => 3
    ]);
  }
}
