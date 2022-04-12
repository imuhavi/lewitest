<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'seller']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard']); // Not Done

  Route::resources([
    'product' => ProductController::class
  ]);

  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft');
  Route::get('orders', [DashboardController::class, 'orderList'])->name('orderList'); // Not Done
});