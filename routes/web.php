<?php

use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'frontend'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/shop/{slug}/{id}', [FrontendController::class, 'categoryShop'])->name('categoryShop');
Route::get('/product/{slug}', [FrontendController::class, 'productView'])->name('productView');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');
Route::get('/subscription', [FrontendController::class, 'subscription'])->name('subscription');

Route::get('/terms-and-condition', [FrontendController::class, 'termsAndCondition'])->name('termsAndCondition');


Route::get('/seller-register/{subscription}', [FrontendController::class, 'sellerRegister'])->name('sellerRegister');

Route::group(['middleware' => ['auth', 'verified']], function () {
  Route::get('/profile', [UserProfileController::class, 'userProfile'])->name('userProfile');
  Route::post('/update-profile', [UserProfileController::class, 'updateProfile'])->name('updateProfile');
  Route::post('/update-password', [UserProfileController::class, 'updatePassword'])->name('updatePassword');

  Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
});

# Subscribe & register for seller
Route::post('/subscribe-subscription/{subscription}', [SubscriptionController::class, 'subscribe']);

# Get States and Cities.
Route::get('get-cities/{stateId}', [FrontendController::class, 'getCity'])->name('getCity');

# MyFatoorah Start
Route::group(['namespace' => 'App\Http\Controllers'], function () {
  Route::get('/payment/index', 'MyFatoorahController@index')->name('MyFatoorah.index');
  Route::get('/payment/success_callback', 'MyFatoorahController@successCallback')->name('MyFatoorah.success');
  Route::get('/payment/fail_callback', 'MyFatoorahController@failCallback')->name('MyFatoorah.fail');
});
# MyFatoorah End

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/seller.php';
require __DIR__ . '/customer.php';

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});
