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
    }
}
