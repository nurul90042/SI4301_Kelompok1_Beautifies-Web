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

// Route::get('/', function () {
//     return view('welcome');
// });

//ADMIN
Route::get('/admin', [App\Http\Controllers\IndexAdminController::class, 'index'])->name('index-admin');
Route::get('/grafik', [App\Http\Controllers\GrafikAdminController::class, 'index'])->name('grafik-admin');
Route::get('/aboutm', [App\Http\Controllers\AboutAdminController::class, 'index'])->name('about-manage');
Route::get('/productm', [App\Http\Controllers\ProdukAdminController::class, 'index'])->name('product-manage');
Route::get('/shopm', [App\Http\Controllers\ShopAdminController::class, 'index'])->name('shop-manage');



// GUEST
Route::get('/index', [App\Http\Controllers\UserGuestController::class, 'index'])->name('home-guest');
<<<<<<< HEAD
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
=======

>>>>>>> b74e9dc5133094c12b9bc7aeecca37f13376f9c7
