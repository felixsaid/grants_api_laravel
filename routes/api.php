<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrantsAuthController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'App\Http\Controllers\GrantsAuthController@login');
    Route::post('register', 'App\Http\Controllers\GrantsAuthController@register');
    Route::get('/all_grants', 'App\Http\Controllers\GrantsAuthController@getAll');
    Route::post('/create_grant', 'App\Http\Controllers\GrantsAuthController@create_grant');
    Route::get('/grant_by_id/{id}', 'App\Http\Controllers\GrantsAuthController@grant_by_id');
    Route::put('/update_grant/{id}', 'App\Http\Controllers\GrantsAuthController@update_grant');
    Route::delete('/delete_grant/{id}', 'App\Http\Controllers\GrantsAuthController@delete_grant');
});