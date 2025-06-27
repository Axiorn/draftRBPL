<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

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
Route::get('/keranjang', [LandingController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [LandingController::class, 'checkout'])->name('checkout');
Route::get('/login', [LandingController::class, 'login'])->name('login');
Route::get('/signup', [LandingController::class, 'signup'])->name('signup');
Route::get('/owner',[LandingController::class, 'owner'])->name('owner');

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin');
    Route::get('/tambahProduk', [AdminController::class, 'tambahProduk'])->name('tambahProduk');
    Route::get('/kelolaStok', [AdminController::class, 'kelolaStok'])->name('kelolaStok');
    Route::get('/riwayatPembelian', [AdminController::class, 'riwayatPembelian'])->name('riwayatPembelian');
});