<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

// Open the Users page to view all users.
Route::get('/users', [UserController::class, 'index']);
//Show single user
Route::get('/users/{id}', [UserController::class, 'show']);

//Submit a form to create a new user.
Route::post('/users', [UserController::class, 'store']);

//Submit an edit form to update all user fields.
Route::put('/users/{id}', [UserController::class, 'update']);

//Just change the user's status (active/inactive) without editing full details.
Route::patch('/users/{id}/status', [UserController::class, 'updateStatus']);

//Permanently remove a user.
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// prefix group example
Route::prefix('users')
     ->controller(UserController::class)
     ->name('user.')
     ->group(function () {
	     Route::get('/', 'index');
	     Route::post('/store', 'store');
	     Route::get('/{user}', 'single');
	     Route::put('/{user}/update', 'update');
	     Route::patch('/{user}/update/status', 'updateStatus');
	     Route::delete('/{user}/delete', 'destroy');
});

