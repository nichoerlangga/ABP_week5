<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'App\Http\Controllers\Lat1Controller@index');
Route::get('/lat1', 'App\Http\Controllers\Lat1Controller@index');
Route::get('/lat1/lat2', 'App\Http\Controllers\Lat1Controller@method2');