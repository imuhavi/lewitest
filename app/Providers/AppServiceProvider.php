<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
  private $VIEW_PATH = 'backend.paginate.';
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    if($this->app->environment('production')) {
        \URL::forceScheme('https');
    }
    Paginator::defaultView($this->VIEW_PATH . 'index');
  }
}
