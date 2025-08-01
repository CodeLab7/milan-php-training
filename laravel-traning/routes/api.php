<?php

use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
	return $request->user();
})->middleware('auth:sanctum');

Route::prefix('users')
	->controller(UserApiController::class)
	->name('user.')
	->group(function () {
		Route::get('/', 'index')->name('index');
		Route::post('/register', 'register')->name('register');
		Route::post('/{id}/update', 'update')->name('update');
		Route::delete('/{id}/delete', 'destroy')->name('destroy');
	});