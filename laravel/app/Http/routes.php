<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {

        Route::get('/car', ['as' => 'cars.index', 'uses' => 'CarController@index']);

        Route::get('/car/create', ['as' => 'cars.create', 'uses' => 'CarController@create']);

        Route::post('/car/store', ['as' => 'cars.show', 'uses' => 'CarController@store']);

        Route::get('/car/{id}', ['as' => 'cars.show', 'uses' => 'CarController@show']);

        Route::get('/car/{id}/edit', ['as' => 'cars.edit', 'uses' => 'CarController@edit']);

        Route::patch('/car/{id}', ['as' => 'cars.show', 'uses' => 'CarController@update']);

        Route::delete('/car/{id}', ['as' => 'cars.index', 'uses' => 'CarController@destroy']);

        Route::get('/car/{id}/{str}', ['as' => 'test', 'uses' => 'CarController@test']);

});

Route::get('/login', ['as' => 'login', 'uses' => 'UserController@showLogin']);

Route::post('/login', ['as' => 'login', 'uses' => 'UserController@doLogin']);

Route::get('/logout', ['as' => 'login', 'uses' => 'UserController@doLogout']);
