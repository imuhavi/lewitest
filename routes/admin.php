<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

  Route::get('/dashboard', function () {
    return view('backend.dashboard');
  });
});
