<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/produk', [LandingController::class, 'produk'])->name('produk');
Route::get('/status', [LandingController::class, 'status'])->name('status');
Route::get('/admin', [LandingController::class, 'admin'])->name('admin');
Route::get('/keranjang', [LandingController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('checkout');