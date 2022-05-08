<?php

namespace Database\Seeders;

use App\Models\SubscriptionOption;
use Illuminate\Database\Seeder;

class SubscriptionOptionTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    SubscriptionOption::create([
      'subscription_id' => 1,
      'option' => 'Full space access'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 1,
      'option' => 'Dedicated team'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 1,
      'option' => 'Buffet food'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 1,
      'option' => 'Premium Decoration'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 1,
      'option' => 'Pay as plan'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 2,
      'option' => 'Full space access'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 2,
      'option' => 'Dedicated team'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 2,
      'option' => 'Buffet food'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 2,
      'option' => 'Premium Decoration'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 2,
      'option' => 'Pay as plan'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 3,
      'option' => 'Full space access'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 3,
      'option' => 'Dedicated team'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 3,
      'option' => 'Buffet food'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 3,
      'option' => 'Premium Decoration'
    ]);
    SubscriptionOption::create([
      'subscription_id' => 3,
      'option' => 'Pay as plan'
    ]);
  }
}