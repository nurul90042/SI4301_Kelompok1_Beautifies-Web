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
Route::get('/', [App\Http\Controllers\UserGuestController::class, 'index'])->name('home-guest');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
Route::get('/about-us', [App\Http\Controllers\AboutUSController::class, 'index'])->name('about');


//MEMBER
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('index-member');

