<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/products', 'App\Http\Controllers\MainController@products');

Route::get('/registration', 'App\Http\Controllers\AuthController@registration');

Route::get('/login', 'App\Http\Controllers\AuthController@login');
