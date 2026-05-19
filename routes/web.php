<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/category', function () {
        return view('pages.category');
    });

    Route::get('/manage-account', function () {
        return view('pages.accounts.account_settings');
    });

    Route::get('/contact', function () {
        return view('pages.contact');
    });

    // PRODUCTS

    Route::get('/products', function(){
        return view('pages.products');
    });

    Route::get('/upload-products', function () {
        return view('pages.products.upload_products');
    });

    Route::post('/upload-products', [ProductController::class, 'store'])->name('products.store');

    Route::get('/view-all', [ProductController::class, 'index'])->name('products.index');

    Route::get('/edit-product/{product}', [ProductController::class, 'edit'])
        ->name('products.edit');

    Route::put('/products/{product}', [ProductController::class, 'update'])
        ->name('products.update');

    Route::delete('/products/{product}', [ProductController::class, 'destroy'])
        ->name('products.delete');
        

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';