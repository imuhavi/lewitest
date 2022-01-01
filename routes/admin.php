<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MailboxController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SellerController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\SocialConfigController;
use App\Http\Controllers\Backend\SubcategoryController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'admin']], function () {

  Route::get('/dashboard', [DashboardController::class, 'dashboard']);

  Route::resources([
    'category' => CategoryController::class,
    'subcategory' => SubcategoryController::class,
    'product' => ProductController::class,
    'coupon' => CouponController::class,
    'brand' => BrandController::class,
  ]);

  Route::get('product-draft', [ProductController::class, 'productDraft'])->name('productDraft');
  Route::get('orders', [DashboardController::class, 'orderList'])->name('orderList');

  Route::get('seller-list', [SellerController::class, 'sellerList'])->name('sellerList');
  Route::get('seller-withdraw', [SellerController::class, 'paymentWithdraw'])->name('paymentWithdraw');

  Route::get('customer-list', [CustomerController::class, 'customerList'])->name('customerList');
  Route::get('customer/{id}', [CustomerController::class, 'customerShow'])->name('customerShow');
<<<<<<< HEAD
  Route::get('customer-delete/{id}', [CustomerController::class, 'distroy'])->name('customer.destroy');
=======
>>>>>>> ac881efada3c18ff352ca98ae0ecebb5dcbade76

  // Mailbox Route
  Route::get('mail', [MailboxController::class, 'mailbox'])->name('mailbox');
  Route::get('compose', [MailboxController::class, 'compose'])->name('compose');


  // Settings Route,
  Route::get('settings', [GeneralSettingController::class, 'settings'])->name('settings');
  Route::post('settings-update', [GeneralSettingController::class, 'update'])->name('settings.update');
  Route::post('settings-seo-update', [GeneralSettingController::class, 'seoUpdate'])->name('settings.seo.update');
  Route::post('settings-mail-update', [GeneralSettingController::class, 'mailUpdate'])->name('settings.mail.update');
  Route::post('settings-social-update', [SocialConfigController::class, 'update'])->name('settings.social.update');
});