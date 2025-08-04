<?php

use Illuminate\Support\Facades\Route;

// URL Generation
Route::view('home', 'home');
Route::view('user', 'home');

Route::view('about', 'about');
Route::view('about/{name}', 'about');

/*// Open the Users page to view all users.
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
Route::delete('/users/{id}', [UserController::class, 'destroy']);*/

// Route Name
Route::get('user/profile', fn() => 'User Profile')->name('profile');