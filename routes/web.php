<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(){
    return view('pages.products');
});

Route::get('/category', function(){
    return view('pages.category');
});

Route::get('/register', function(){
    return view('pages.auth.register');
});

Route::get('/login', function(){
    return view('pages.auth.login');
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