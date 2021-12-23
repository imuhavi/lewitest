<?php

use Illuminate\Support\Facades\Route;

use App\Http\Backend\Controllers\CouponController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\UserProfileController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

  Route::get('/profile', [UserProfileController::class, 'userProfile'])->name('userProfile');

  Route::resources([
    'category' => CategoryController::class,
    'subcategory' => SubcategoryController::class,
    'product' => ProductController::class,
    'coupon' => CouponController::class,
  ]);
  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft');

  Route::get('customer-list', [CustomerController::class, 'customerList'])->name('customerList');
});
