<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');

Route::get('/players/{id}', 'PlayersController@show');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@create']);

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@destroy');

Route::post('/teams/{id}/comment', 'CommentController@store');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show');

Route::get('/news/teams/{team}', 'NewsController@filter');