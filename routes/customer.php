<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customer', 'middleware' => ['auth', 'verified', 'customer']], function () {

  Route::get('/dashboard', function () {
    return 'customer dashboard';
  });
});
