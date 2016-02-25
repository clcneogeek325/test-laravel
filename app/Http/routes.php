<?php

Route::group(['middleware' => 'web'], function () {
	    Route::get('/', function () {
	    return view('welcome');
	});
    Route::get('/home', 'UserController@index');
	Route::get('/user/create', 'UserController@create');
	Route::get('/user/{id}/json', 'UserController@users_json');
	Route::any('/user/store', 'UserController@store');
	Route::get('user/{id}/edit', 'UserController@edit');
	Route::any('user/{id}/update', 'UserController@update');
	Route::get('user/{id}/delete', 'UserController@destroy');


});



Route::group(['middleware' => 'auth'], function () {
    Route::auth();


});
