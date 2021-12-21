<?php

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

Route::get('/dashboard', function () {
  return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
require __DIR__ . '/auth.php';
=======
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/seller.php';
require __DIR__.'/customer.php';
>>>>>>> 1a9dfbfb898733f7725f21e9b33d538fa647b033
