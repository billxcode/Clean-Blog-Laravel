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
Route::get('/admin','Admin@login');
Route::get('/admin/login','Admin@login');
Route::get('/admin/dashboard','Admin@dashboard');
Route::get('/admin/profile','Admin@profile');
Route::get('/admin/content/{param?}','Admin@content');
Route::get('/admin/account','Admin@account');