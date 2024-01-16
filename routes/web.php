<?php

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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/shop',[App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' =>'admin'], function() {
    Route::get("/", [App\Http\Controllers\Admin\DashboardController::class, "index"]) -> name("dashboard");
    Route::get("/product", [App\Http\Controllers\Admin\ProductController::class, "index"]) -> name("product.index");
    Route::resource("product", App\Http\Controllers\Admin\ProductController::class);
});

Route::get("/carts", [App\Http\Controllers\CartController::class, "index"]) -> name("carts.index");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
