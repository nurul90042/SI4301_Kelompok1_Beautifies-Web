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

Route::get('/admin', [App\Http\Controllers\IndexAdminController::class, 'index'])->name('index-admin');
Route::get('/grafik', [App\Http\Controllers\GrafikAdminController::class, 'index'])->name('grafik-admin');
Route::get('/index', [App\Http\Controllers\UserGuestController::class, 'index'])->name('home-guest');
