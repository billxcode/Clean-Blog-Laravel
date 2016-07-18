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

Route::get('/','MainController@index');
Route::get('/about','MainController@about');
Route::get('/contact','MainController@contact');
Route::get('/post','MainController@post');
Route::group(['prefix'=>'admin'],function(){
Route::get('/','Admin@dashboard');
Route::get('/auth/login','Auth\AuthController@getlogin');
Route::get('/auth/logout','Auth\AuthController@getlogout');
Route::post('/auth/login','Auth\AuthController@postlogin');

Route::get('/auth/register','Auth\AuthController@getregister');
Route::post('/auth/register','Auth\AuthController@postregister');


Route::get('/dashboard',['middleware'=>'auth','uses'=>'Admin@dashboard']);
Route::get('/profile','Admin@profile');
Route::get('/content/{param?}','Admin@content');
Route::get('/account','Admin@account');
});

