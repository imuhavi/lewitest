<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'customer', 'middleware' => ['auth', 'verified', 'customer']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard']);
  Route::get('orders', [DashboardController::class, 'orderList'])->name('orderList');
});
