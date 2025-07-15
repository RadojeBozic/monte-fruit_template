<?php
use Illuminate\Support\Facades\Route;
use Webkul\Shop\Http\Controllers\ProductController;

Route::get('/istaknuti-proizvodi', [ProductController::class, 'featured'])
    ->name('products.featured');