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

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index');
    Route::get('/{id}', 'ClientController@show');
    Route::post('/', 'ClientController@store');
    Route::put('/{id}', 'ClientController@update');
    Route::delete('/{id}', 'ClientController@destroy');
});

Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@show');
    Route::post('/', 'UserController@store');
    Route::put('/{id}', 'UserController@update');
    Route::delete('/{id}', 'UserController@destroy');
});

Route::prefix('pets')->group(function () {
    Route::get('/', 'PetController@index');
    Route::get('/{id}', 'PetController@show');
    Route::post('/', 'PetController@store');
    Route::put('/{id}', 'PetController@update');
    Route::delete('/{id}', 'PetController@destroy');
});
