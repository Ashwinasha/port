<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\PageController;

Route::get('/products', [PageController::class, 'ourProducts'])->name('products');

Route::get('/packages', [PageController::class, 'ourPackages'])->name('packages');
