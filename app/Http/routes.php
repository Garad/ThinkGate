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



Route::auth();

Route::get('/', function(){
	return view('pages.home');
});

Route::get('/about', function(){
	return view('pages.about');
});
Route::get('/contact', function(){
	return view('pages.contact');
});

Route::resource('cv', 'MycvController');
Route::get('{passport}/{name}', 'MycvController@show');

Route::post('{passport}/{name}/photos', ['as' => 'store_photo_path', 'uses' => 'MycvController@addPhoto']);



