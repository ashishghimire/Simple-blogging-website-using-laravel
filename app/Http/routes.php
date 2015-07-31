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

Route::get('/', 'ArticlesController@index');

Route::get('article','ArticlesController@index');
Route::get('article/{slug}','ArticlesController@show');
Route::get('addarticle', ['middleware'=>'auth','uses'=>'ArticlesController@create']);
Route::post('uploadarticle', 'ArticlesController@store');
Route::get('article/{slug}/edit', ['middleware'=>'auth','uses'=>'ArticlesController@edit']);
Route::patch('editarticle/{slug}', 'ArticlesController@update');
//Route::resource('/','IndexController');
Route::get('profile','ProfileController@index');
Route::get('profile/{id}', ['middleware'=>'auth','uses'=>'ProfileController@show']);

Route::post('search','SearchController@index');

Route::controllers(
    [
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    ]
);
