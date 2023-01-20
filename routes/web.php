<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::get('/all-products', function () {
    return view('all-products');
});

Route::get('/add-new-product', function () {
    return view('add-new-product');
});

Route::get('/product-categories', function () {
    return view('product-categories');
});

Route::get('/tags', function () {
    return view('tags');
});

Route::get('/reviews', function () {
    return view('reviews');
});
