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
Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController@index');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('comment/store', 'CommentsController@store');
Route::get('articles/listing', 'ArticlesController@listing');
Route::get('articles/{id}', 'ArticlesController@show');
Route::get('moods/listing', 'MoodsController@listing');
Route::get('moods/{id}', 'MoodsController@show');
Route::get('leaves/listing', 'LeavesController@listing');
Route::post('leaves/store', 'LeavesController@store');
Route::get('leaves/{id}', 'LeavesController@show');
Route::get('plays/listing', 'PlaysController@listing');
Route::get('plays/{id}', 'PlaysController@show');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('articles', 'ArticlesController');
  Route::resource('comments', 'CommentsController');
});

