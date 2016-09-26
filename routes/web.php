<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/home', 'HomeController@store');

Route::get('/audio', 'AudioController@index');

Route::get('/video', 'VideoController@index');

Route::post('/video', 'VideoController@store');

Route::post('/', 'ContactController@create');

Route::get('/', 'ImageController@index');

Route::get('/books', 'ImageController@index1');

//Route::get('/events', 'ImageController@index1');



Route::get('/events', function(){
	return view('events');
});

Route::get('/mission', function(){
	return view('mission');
});

Route::get('/contacts', function(){
	return view('contacts');
});

Route::get('/about_gen', function(){
	return view('about_gen');
});

//Route::get('/messages', function(){
//	return view('message');
//});

Route::get('/about_gen', 'ImageController@indexgen');

Route::get('/messages', 'ContactController@readAll');

Route::get('/messages/{id}', 'ContactController@readOne');

Route::get('/sermons', 'VideoController@readAll');

Route::get('/messages/delete/{id}', 'ContactController@delete');










