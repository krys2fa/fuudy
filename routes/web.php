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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DishesController@dish_list');

Route::get('secured', array('before' => 'auth', function(){
	return 'This is a secured page!';
}));



// Login Routes
Route::get('login', 'Auth\LoginController@create');
Route::post('login', 'Auth\LoginController@store');


// Registration Routes
Route::get('registration', 'Auth\RegisterController@new');
Route::post('registration', 'Auth\RegisterController@store');

// Profile Routes
Route::get('profile', 'ProfilesController@profile');
Route::get('profile-edit', 'ProfilesController@edit');
Route::post('profile-edit', 'ProfilesController@update');

// Dish Routes
Route::get('dishes', 'DishesController@dish_list');
Route::get('dish-detail/{id}', 'DishesController@dish_detail');
Route::get('add-dish/{id}', 'DishesController@add_dish');
Route::get('remove-dish/{key}', 'DishesController@remove_dish');
Route::get('empty-cart', 'DishesController@empty_cart');

//Restaurant Routes
Route::get('restaurants', 'RestaurantsController@create');
Route::get('restaurants/{id}', 'RestaurantsController@restaurant_detail');

//Order Routes
Route::get('orders', 'OrdersController@create');
Route::get('orders/{id}', 'OrdersController@order_detail');









