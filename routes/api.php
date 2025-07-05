<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('user', UserController::class);
Route::get('features', [FeatureController::class, 'index'])->name('features.index');
Route::apiResource('books', BookController::class)->only(['index', 'show']);
