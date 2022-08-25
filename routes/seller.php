<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'verified', 'seller', 'active_shop']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard']); // Not Done

  Route::resources([
    'product' => ProductController::class
  ]);


  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft');
  Route::get('orders', [DashboardController::class, 'orderList'])->name('orderList');
  Route::get('my-withdraw', [WithdrawController::class, 'myWithraw'])->name('myWithraw');
  Route::post('withdrow-request', [WithdrawController::class, 'withdrawRequest'])->name('withdrawRequest');
});
