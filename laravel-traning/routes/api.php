<?php

use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserApiController::class, 'index']);
Route::post('/users/register', [UserApiController::class, 'register']);
Route::post('/users/{id}/update', [UserApiController::class, 'update']);
Route::delete('/users/{id}/delete', [UserApiController::class, 'destroy']);