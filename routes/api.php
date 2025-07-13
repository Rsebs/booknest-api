<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('user', UserController::class);
});

Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::get('features', [FeatureController::class, 'index'])->name('features.index');
Route::apiResource('books', BookController::class)->only(['index', 'show']);
