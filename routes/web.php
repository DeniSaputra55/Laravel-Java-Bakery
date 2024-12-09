<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk halaman home (setelah login)
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index')->middleware('auth');

//produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/add/produk', [ProdukController::class,'create']);
Route::post('/add/produk', [ProdukController::class,'store'])->name('store');
Route::get('/produk/{id}', [ProdukController::class,'edit']);
Route::post('/edit/produk', [ProdukController::class,'update'])->name('update');
Route::get('/produk/show/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('/delete/{id}',[ProdukController::class,'destroy']);
