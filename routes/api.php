<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Rotas das visitas no site
 */
Route::prefix('register')->group(function () {
    Route::get('/all_registers', 'RegisterController@index')->middleware('cors');
    Route::get('/store_register', 'RegisterController@store')->middleware('cors');
});

/**
 * Rotas dos comentários
 */
Route::prefix('comments')->group(function () {
    Route::get('/all_comments', 'CommentController@index')->middleware('cors');
    Route::get('/get_lasts_comments', 'CommentController@getLastsComments')->middleware('cors');
    Route::post('/store_comments', 'CommentController@store')->middleware('cors');
});


