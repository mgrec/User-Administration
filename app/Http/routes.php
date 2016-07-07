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
Route::get('user/', 'ConsumerController@home');
Route::get('user/create', 'ConsumerController@create');
Route::get('user/list', 'ConsumerController@listing');
Route::get('user/contact', 'ConsumerController@contact');

Route::post('user/create', 'ConsumerController@store');

Route::delete('user/list/delete/{id}', 'ConsumerController@delete');