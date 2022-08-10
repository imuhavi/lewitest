<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    GeneralSetting::create([
      'app_name' => '5dots',
      'app_logo_white' => '',
      'app_logo_black' => '',
      'app_phone' => '0534588012',
      'shipping_cost' => 30,
      'shipping_days' => 7,
      'app_email' => 'info@5dots.sa',
      'app_address' => 'Al-Khobar',
      'app_copyright_text' => 'Copyright © 2022 [5dots.sa] All rights reserved.',
      'seo_title' => '5dots',
      'seo_description' => 'Laravel Ecommerce',
      'seo_keywords' => 'Laravel, Ecommerce',
      'mail_type' => 'smtp',
      'mail_host' => 'smtp.gmail.com',
      'mail_port' => '587',
      'mail_username' => 'rahmmed.info@gmail.com',
      'mail_password' => 'ibqfnsjvxkybpaql',
      'mail_encryption' => 'tls',
      'mail_address' => '5dots.sa@gmail.com',
      'mail_from_name' => '5dots'
    ]);
  }
}
