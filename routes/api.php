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

Route::group(['prefix' => 'v1'], function()
{
    Route::group(['prefix' => 'island'], function()
    {
        Route::get('{id}','IslandController@show');
        Route::get('status/{id}', 'IslandController@status');
        Route::post('add','IslandController@store');
        Route::post('update','IslandController@update');
    });

    Route::group(['prefix' => 'container'], function()
    {
        Route::get('{id}','ContainerController@show');
        Route::get('status/{id}', 'ContainerController@status');
        Route::post('add','ContainerController@store');
        Route::post('update','ContainerController@update');
    });
});