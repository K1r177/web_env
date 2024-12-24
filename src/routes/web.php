<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::post('/store', [HomeController::class, 'store'])->withoutMiddleware(VerifyCsrfToken::class);

Route::post('/update', [HomeController::class, 'update'])->withoutMiddleware(VerifyCsrfToken::class);
