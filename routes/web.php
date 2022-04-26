<?php

use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', [FrontendController::class, 'frontend'])->name('home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/product/{slug}', [FrontendController::class, 'singleProductView'])->name('singleProductView');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');
Route::get('/subscription', [FrontendController::class, 'subscription'])->name('subscription');

Route::get('/seller-register', [FrontendController::class, 'sellerRegister'])->name('sellerRegister');

Route::group(['middleware' => ['auth', 'verified']], function () {
  Route::get('/profile', [UserProfileController::class, 'userProfile'])->name('userProfile');
  Route::post('/update-profile', [UserProfileController::class, 'updateProfile'])->name('updateProfile');
  Route::post('/update-password', [UserProfileController::class, 'updatePassword'])->name('updatePassword');

  Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/seller.php';
require __DIR__ . '/customer.php';

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});
