<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/list', [ProductController::class, 'indexcomposerview']);

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');