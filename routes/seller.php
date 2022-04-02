<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'seller']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard']);

  Route::resources([
    'product' => ProductController::class // Not Done
  ]);

  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft'); // Not Done
  Route::get('orders', [DashboardController::class, 'orderList'])->name('orderList'); // Not Done
});