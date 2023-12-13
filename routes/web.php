<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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



Route::prefix('products')->group(function () {
    // Menampilkan daftar produk
    Route::get('/', [ProductController::class, 'index'])->name('products.index');

    // Menampilkan formulir untuk menambah produk
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');

    // Menyimpan produk baru ke database
    Route::post('/', [ProductController::class, 'store'])->name('products.store');

    // Menampilkan halaman detail produk
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');

    // Menampilkan formulir untuk mengedit produk
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

    // Menyimpan perubahan produk ke database
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');

    // Menghapus produk dari database
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});