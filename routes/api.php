<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// App\Http\Controllers\Auth\UserAuthController@index

Route::post('/register', 'App\Http\Controllers\Auth\UserAuthController@register');
Route::post('/login', 'App\Http\Controllers\Auth\UserAuthController@login');


Route::get('/user', 'App\Http\Controllers\Auth\UserAuthController@getUser')->middleware('auth:api');
Route::get('/consumer-data', 'App\Http\Controllers\Auth\UserAuthController@getConsumerData');
Route::post('/consumer-data', 'App\Http\Controllers\Auth\UserAuthController@addConsumerData');