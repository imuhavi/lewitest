<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'seller']], function () {

  Route::get('/dashboard', function () {
    return view('seller.dashboard');
  });
});
