<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/accounts', [GetController::class, 'accounts']);

Route::get('/contacts', [GetController::class, 'contacts']);

Route::get('/bills', [GetController::class, 'bills']);

