<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
  // URL Genration
  Route::view('home','home');
  Route::view('user','home');

  Route::view('about','about');
  Route::view('about/{name}','about');
