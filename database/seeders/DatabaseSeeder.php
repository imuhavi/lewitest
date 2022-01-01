<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\SocialConfig;
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
      'email_verified_at' => now(),
      'role' => 'Admin',
      'password' => bcrypt('12345678')
    ]);

    Category::create([
      'name' => 'Default category',
      'slug' => 'default_category',
      'meta_title' => 'Default category',
      'meta_description' => 'Default description',
      'type' => 'Default'
    ]);

    GeneralSetting::create([
      'app_name' => 'Laravel Ecommerce',
      'app_logo_white' => '',
      'app_logo_black' => '',
      'app_phone' => '01911111111',
      'app_email' => 'laravel@ecom.com',
      'app_address' => 'This is demo address',
      'app_copyright_text' => 'This is demo copyright text',
      'seo_title' => 'Laravel Ecommerce',
      'seo_description' => 'Laravel Ecommerce',
      'seo_keywords' => 'Laravel, Ecommerce',
      'mail_type' => 'SMTP',
      'mail_host' => 'smtp.mailtrap.io',
      'mail_port' => '2525',
      'mail_username' => 'bcbb5a36522425',
      'mail_password' => '04c13fb15063a9',
      'mail_encryption' => 'tls',
      'mail_address' => 'laravel@ecom.com',
      'mail_from_name' => 'Laravel Ecommerce'
    ]);

    SocialConfig::create([
      'type' => 'Facebook',
      'app_id' => '12345',
      'app_secret' => '12345'
    ]);
    SocialConfig::create([
      'type' => 'Google',
      'app_id' => '12345',
      'app_secret' => '12345'
    ]);
    SocialConfig::create([
      'type' => 'Twitter',
      'app_id' => '12345',
      'app_secret' => '12345'
    ]);
  }
}
