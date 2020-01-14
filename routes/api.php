<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/event/create', 'EventController@store');
Route::get('/event/edit/{id}', 'EventController@edit');
Route::post('/event/update/{id}', 'EventController@update');
Route::delete('/event/delete/{id}', 'EventController@delete');
Route::get('/events', 'EventController@index');