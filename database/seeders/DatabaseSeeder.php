<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();

    User::create([
      'name' => 'Super admin',
      'email' => 'admin@admin.com',
      'password' => bcrypt('12345678')
    ]);
    Category::create([
      'name' => 'Default category',
      'slug' => 'default_category',
      'meta_title' => 'Default category',
      'meta_description' => 'Default description',
      'type' => 'Default'
    ]);
  }
}
