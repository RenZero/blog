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
    return 'Bar';
    //return view('welcome');
});

Route::get('home1', function () {
    return view('welcome');
});


Route::get('blog', 'BlogController@index');
Route::get('blog/create', 'BlogController@create');
Route::get('blog/{id}', 'BlogController@show');
Route::post('blog', 'BlogController@store');

//Route::controller('home');
