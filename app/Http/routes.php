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
Route::get('contacts', 'Contact@index');
Route::get('contacts-add', 'contactAdd@index');
Route::post('contacts-add/save', 'contactAdd@store');
Route::get('contacts/save', 'contactAdd@store');
Route::get('contacts/create', 'Contact@create');
Route::get('contact/save', 'Contact@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
