<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/product', [AdminController::class, 'product'])->name('admin.product');
    Route::get('/product/add', [AdminController::class, 'addProduct'])->name('admin.addProduct');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index');
});
