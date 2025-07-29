<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect()->route('login');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
     ->middleware(CheckUserAuth::class)
     ->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// prefix group example
Route::prefix('users')
     ->controller(UserController::class)
     ->name('user.')
     ->group(function () {
	     Route::get('/', 'index')->name('index');
	     Route::post('/store', 'store')->name('store');
	     Route::get('/create/form', 'create')->name('create');
	     Route::get('/{user}/single', 'single')->name('single');
	     Route::get('/{user}/download', 'download')->name('download');
	     Route::put('/{user}/update', 'update')->name('update');
	     Route::patch('/{user}/update/status', 'updateStatus')->name('updateStatus');
	     Route::delete('/{user}/delete', 'destroy')->name('destroy');
     });

require __DIR__ . '/auth.php';
require __DIR__ . '/training.php';

