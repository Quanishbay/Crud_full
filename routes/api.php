<?php

use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::get('/posts', [IndexController::class, 'index']);
    Route::post('/posts', [StoreController::class, 'store']);
    Route::put('/posts/{id}', [UpdateController::class, 'update']);
    Route::delete('/posts/{id}', [DestroyController::class, 'destroy']);
});

Route::get('/categories', [PostController::class, 'categories']);
Route::get('/tags', [PostController::class, 'tags']);
