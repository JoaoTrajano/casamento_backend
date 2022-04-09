<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/all_registers', 'RegisterController@index');
Route::post('/store_register', 'RegisterController@store');
