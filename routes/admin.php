<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

  Route::get('/dashboard', function () {
    return view('backend.dashboard');
  });

  Route::resources([
    'category' => CategoryController::class,
    'subcategory' => SubcategoryController::class,
    'product' => ProductController::class,
    'coupon' => CouponController::class,
  ]);
  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft');
});
