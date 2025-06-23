<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
	return view('index');
});
Route::get('/about', function () {
	return view('about');
});
Route::get('/post', function () {
	return view('post');
});

// URL Generation
 Route::view('home','home');
 Route::view('user','home');

 Route::view('about','about');
 Route::view('about/{name}','about');

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

// prefix group example
Route::prefix('user')
     ->controller(UserController::class)
     ->name('user.')
     ->group(function () {
	     Route::get('/list', 'index')->name('index');
	     Route::post('/store', 'store')->name('store');
	     Route::get('/{user}', 'single')->name('single');
	     Route::put('/{user}/update', 'update')->name('update');
	     Route::patch('/{user}/update/status', 'updateStatus')->name('updateStatus');
	     Route::delete('/{user}/delete', 'destroy')->name('destroy');
});

// Route Name
Route::get('user/profile', fn() => 'User Profile')->name('profile');