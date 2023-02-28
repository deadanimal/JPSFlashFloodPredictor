<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::middleware('auth')->group(function () {
    Route::get('/', [SiteController::class, 'show_home']);
    Route::get('/dashboard', [SiteController::class, 'show_dashboard']);
});