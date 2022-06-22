<?php

use Illuminate\Support\Facades\Route;

/**
 * Rotas das visitas no site
 */
Route::prefix('register')->group(function () {
    Route::get('/all_registers', 'RegisterController@index');
    Route::get('/store_register', 'RegisterController@store');
});

/**
 * Rotas dos comentários
 */
Route::prefix('comments')->group(function () {
    Route::get('/all_comments', 'CommentController@index');
    Route::get('/get_lasts_comments', 'CommentController@getLastsComments');
    Route::post('/store_comments', 'CommentController@store');
    Route::get('/get_comments_to_approve', 'CommentController@getCommentsToApprove');
    Route::post('/approve_commenter', 'CommentController@approveCommenter');
});

