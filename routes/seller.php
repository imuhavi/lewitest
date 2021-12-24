<?php

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'seller', 'middleware' => ['auth', 'seller']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard']);

  Route::resources([
    'category' => CategoryController::class,
    'subcategory' => SubcategoryController::class,
    'product' => ProductController::class,
    'coupon' => CouponController::class,
    'brand' => BrandController::class
  ]);

  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft');
  Route::get('orders', [DashboardController::class, 'orderList'])->name('orderList');
});
