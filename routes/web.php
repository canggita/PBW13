<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostController::class);
Route::prefix('api')->group(function () {
    Route::apiResource('mahasiswa', MahasiswaController::class);
});