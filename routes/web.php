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

Route::get('/', function () {
    return view('welcome');
});

Route::get('secured', array('before' => 'auth', function(){
	return 'This is a secured page!';
}));




Route::get('login', 'Auth\LoginController@create');
Route::get('login', 'Auth\LoginController@store');

Route::get('registration', 'Auth\RegisterController@new');
Route::post('registration', 'Auth\RegisterController@store');

Route::get('profile', 'ProfilesController@profile');
Route::get('profile-edit', 'ProfilesController@edit');
Route::post('profile-edit', 'ProfilesController@update');













