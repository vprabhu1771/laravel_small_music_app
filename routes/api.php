<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\v2\GenreController;
use App\Http\Controllers\api\v2\BrandController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/genres', [GenreController::class,'index']);

Route::get('/brands', [BrandController::class,'index']);