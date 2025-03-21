<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\CekAdmin;

// Route umum
Route::get('/', [ShopController::class, 'index'])->name('shop.home');

// Route khusus admin (gunakan middleware langsung di route)
Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware(CekAdmin::class)
    ->name('admin.dashboard');

Route::get('/admin/products', [AdminController::class, 'products'])
    ->middleware(CekAdmin::class)
    ->name('admin.products');
    