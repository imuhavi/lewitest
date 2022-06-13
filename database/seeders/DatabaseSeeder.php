<?php

namespace Database\Seeders;

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
    $this->call([
      UserTableSeeder::class,
      CategoryTableSeeder::class,
      GeneralSettingTableSeeder::class,
      SocialConfigTableSeeder::class,
      SellerTableSeeder::class,
      SubscriptionTableSeeder::class,
      SubscriptionOptionTableSeeder::class,
    ]);
  }
}
