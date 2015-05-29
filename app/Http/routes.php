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

Route::get('home', 'HomeController@index');
Route::get('contacts', 'contacts@index');

Route::get('contacts-add', 'contacts@create');
Route::post('contacts-save', 'contacts@store');
Route::get('contacts-edit/{id}', 'contacts@edit');
Route::post('contacts-update/{id}', 'contacts@update');
Route::get('contacts-delete/{id}', 'contacts@destroy');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
