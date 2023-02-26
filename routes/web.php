<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductSubCategoryController;
use App\Http\Controllers\ProductBrandController;
use App\Http\Controllers\ProductBrandTypeController;
use App\Http\Controllers\ProductController;

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
    return view('pages.dashboard');
});

// Route::get('/supplier', function () {
//     return view('pages.supplier.index');
// });

// Route::get('/supplier', [SupplierController::class, 'index']);
Route::resource('/supplier', SupplierController::class);

Route::resource('/product/category', ProductCategoryController::class);
Route::resource('/product/subcategory', ProductSubCategoryController::class);

Route::resource('/product/brand', ProductBrandController::class);
Route::resource('/product/brandtype', ProductBrandTypeController::class);

Route::resource('/product', ProductController::class);
