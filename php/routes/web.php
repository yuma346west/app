<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/signin');
});


Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'App\Http\Controllers\UserController@index');
    Route::get('signin', 'App\Http\Controllers\UserController@page_signin');
    Route::get('signup', 'App\Http\Controllers\UserController@page_signup');

    Route::post('signin', 'App\Http\Controllers\UserController@signin');
    Route::post('signup', 'App\Http\Controllers\UserController@signup');
});

Route::group(['prefix' => 'content'], function () {
    Route::get('/', 'App\Http\Controllers\ContentController@index');
    Route::post('append', 'App\Http\Controllers\ContentController@append');
});
