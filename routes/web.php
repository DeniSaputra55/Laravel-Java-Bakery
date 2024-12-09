<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

//produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/add/produk', [ProdukController::class,'create']);
Route::post('/add/produk', [ProdukController::class,'store'])->name('store');
Route::get('/produk/{id}', [ProdukController::class,'edit']);
Route::post('/edit/produk', [ProdukController::class,'update'])->name('update');
Route::get('/produk/show/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('/delete/{id}',[ProdukController::class,'destroy']);
