<?php

use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [App\Http\Controllers\FrontEnd\HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [App\Http\Controllers\FrontEnd\AboutUsController::class, 'index'])->name('about.index');
Route::get('/shop', [App\Http\Controllers\FrontEnd\ShopController::class, 'index'])->name('shop.index');
Route::get('/product/{slug}', [App\Http\Controllers\FrontEnd\SingleProductController::class, 'index'])->name('single.index');

Route::get('/my-account/login', function () {
    return view('pages.app.my-account.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/user-login', [App\Http\Controllers\FrontEnd\AuthController::class, 'show'])->name('user.login');
    Route::post('/user-login', [App\Http\Controllers\FrontEnd\AuthController::class, 'store'])->name('user.login-store');
    Route::get('/user-register', [App\Http\Controllers\FrontEnd\AuthController::class, 'register'])->name('user.register');
    Route::post('/user-register', [App\Http\Controllers\FrontEnd\AuthController::class, 'register_store'])->name('user.register-store');
});

Route::middleware('auth')->group(function () {
    Route::post('/user-logout', [App\Http\Controllers\FrontEnd\AuthController::class, 'destroy'])->name('user.logout');
    Route::get('/my-account', [App\Http\Controllers\FrontEnd\MyAccountController::class, 'index'])->name('my-account');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Public routes
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::middleware('guest')->group(function () {
            Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'show'])->name('login');
            Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'store'])->name('login.store');
        });
        // Authenticated routes
        Route::middleware('auth_admin')->group(function () {
            Route::get('dashboard', function () {
                return view('pages.admin.index');
            })->name('dashboard');
            Route::resource('supplier', App\Http\Controllers\Admin\SupplierController::class);
            Route::resource('product/category',  App\Http\Controllers\Admin\ProductCategoryController::class);
            Route::resource('product/subcategory', App\Http\Controllers\Admin\ProductSubCategoryController::class);
            Route::resource('product/brand', App\Http\Controllers\Admin\ProductBrandController::class);
            Route::resource('product/brandtype', App\Http\Controllers\Admin\ProductBrandTypeController::class);
            Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
            Route::resource('slider', App\Http\Controllers\Admin\SliderController::class);
            Route::resource('user', App\Http\Controllers\Admin\UserController::class);
        });
    });
