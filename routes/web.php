<?php

use App\Http\Controllers\Backend\UserProfileController;
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

Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
  Route::get('/profile', [UserProfileController::class, 'userProfile'])->name('userProfile');
  Route::post('/update-profile', [UserProfileController::class, 'updateProfile'])->name('updateProfile');
  Route::post('/update-password', [UserProfileController::class, 'updatePassword'])->name('updatePassword');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/seller.php';
require __DIR__ . '/customer.php';

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});
