<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

Route::view('/homeadmin', 'homeadmin');
Route::view('/homestudent', 'homestudent');

Route::get('/logout', 'App\Http\Controllers\LoginController@logout');