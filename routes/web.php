<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(){
    return view('pages.products');
});

Route::get('/category', function(){
    return view('pages.category');
});

Route::get('/manage-account', function(){
    return view('pages.accounts.account_settings');
});

Route::get('/upload-products', function(){
    return view('pages.products.upload_products');
});

Route::get('/view-all', function(){
    return view('pages.products.view_all_products');
});

Route::get('/contact', function(){
    return view('pages.contact');
});