<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CloudinaryController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product', [ProductController::class, 'showProducts'])->name('products');

// Route::get('/admin', [CloudinaryController::class, 'index']);

// Route::post('/admin', [CloudinaryController::class, 'upload'])->name('upload');

Route::get('/productdetail/{slug}', [ProductController::class, 'showProductdetails'])->name('products.show');


Route::fallback(function () {
    return response()->view('pages.errors404', [], 404);
});

Route::view('/gallery', 'gallery')->name('gallery');
