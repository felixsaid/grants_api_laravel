<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrantsController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/grants', 'App\Http\Controllers\GrantsController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'App\Http\Controllers\UserController@login');
    Route::post('register', 'App\Http\Controllers\UserController@register');
});