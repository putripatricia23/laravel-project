<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;


Route::group(['middleware' => ['auth','peran:manager-admin']],function (){


    Route::prefix('admin')->group(function () { 
    
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('create');
        Route::post('produk/store', [ProdukController::class, 'store'])->name('store');
        Route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
        Route::get('produk/show/{id}', [ProdukController::class, 'show'])->name('show'); 
        Route::post('produk/update', [ProdukController::class, 'update'])->name('update');
        Route::get('produk/delete/{id}',[ProdukController::class, 'delete'])->name('delete');
        Route::get('/pesanan',[PesananController::class, 'index'])->name('pesanan'); 
        Route::get('/kategori',[KategoriProdukController::class, 'index'])->name('kategori'); 
        Route::get('/kategori/create', [KategoriProdukController::class, 'create'])->name('create');
        Route::post('/kategori/store', [KategoriProdukController::class, 'store'])->name('store');
        Route::get('/kategori/show/{id}', [KategoriProdukController::class, 'show'])->name('show');
        Route::get('/kategori/edit/{id}',[KategoriProdukController::class, 'edit'])->name('edit'); 
        Route::post('/kategori/update', [KategoriProdukController::class, 'update'])->name('update');
        Route::get('/kategori/delete/{id}',[KategoriProdukController::class, 'delete'])->name('delete'); 
        Route::get('/pesanan',[PesananController::class, 'index'])->name('pesanan'); 
        Route::get('/pesanan/create',[PesananController::class, 'create'])->name('create'); 
        Route::post('/pesanan/push',[PesananController::class, 'push'])->name('push'); 
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit'])->name('edit');
        Route::post('/pesanan/update', [PesananController::class, 'update'])->name('update');
        Route::get('/pesanan/delete/{id}',[PesananController::class, 'delete'])->name('delete');
        Route::get('/pesanan/show/{id}', [PesananController::class, 'show'])->name('show');
        //note endpoint route gak boleh sama
    });
});

Auth::routes();

Route::get('/', [App\Http\Controllers\TokoController::class, 'index'])->name('beranda');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/after_register', [App\Http\Controllers\HomeController::class, 'after'])->name('after_register');

Route::group(['middleware' => ['auth','peran:pelanggan-manager-admin']],function (){


    Route::get('/beli/{id}', [App\Http\Controllers\PesananController::class, 'pesan'])->name('beli');
    Route::post('/beli/store', [App\Http\Controllers\PesananController::class, 'store'])->name('store');
    Route::get('/after_beli', [App\Http\Controllers\TokoController::class, 'create'])->name('after_beli');

});