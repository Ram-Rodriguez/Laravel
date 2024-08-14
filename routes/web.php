<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/products/create',[ProductController::class, 'create'])->name('products_create');//Papunta sa UI
Route::post('/products/store', [ProductController::class, 'store'])->name('store_product');//Pang save ng product
