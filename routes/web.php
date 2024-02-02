<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;

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


// Authentikasi User
Route::get('/login', [AuthController::class, 'login'])->name('login-form');
Route::post('/login', [AuthController::class, 'loginHandle'])->name('login-handle');
Route::get('/register', [AuthController::class, 'register'])->name('register-form');
Route::post('/register', [AuthController::class, 'registerHandle'])->name('register-handle');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// bagian user
Route::get('/', [HomeController::class, 'index'])->name('index');
route::group(['prefix' => 'order' ,'middleware' => ['isAuth', 'isCustomer']], function(){
    Route::get('', [OrderController::class, 'index'])->name('order-form');
    Route::get('', [OrderController::class, 'handle'])->name('order-handle');
});

// bagian admin
Route::group(['prefix' => 'admin', 'middleware' => ['isAuth', 'isAdmin']], function(){
    Route::get('', [ AdminController::class, 'index' ])->name('main-page-admin');
    Route::resource('produk', ProdukController::class)->parameter('produk', 'idProduk')->only('create', 'store', 'edit', 'update', 'destroy');
    Route::resource('kategori', KategoriController::class)->parameter('kategori', 'idKategori')->only('create', 'store', 'destroy');
});