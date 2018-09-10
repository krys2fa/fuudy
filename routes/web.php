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


// Route::get('registration', function(){
// 	return View::make('registration');
// });

// Route::get('login', function(){
// 	return View::make('login');
// });
Route::get('login', 'Auth\LoginController@create');
Route::get('login', 'Auth\LoginController@store');

Route::get('registration', 'Auth\RegisterController@new');
Route::post('registration', 'Auth\RegisterController@store');

Route::get('profile', 'ProfilesController@profile');
Route::get('profile-edit', 'ProfilesController@edit');
Route::post('profile-edit', 'ProfilesController@update');




// Route::post('registration', array('before' => 'csrf', function(){
// 	$rules = array(
// 		'email' => 'required|email|unique:users',
// 		'password' => 'required|same:password_confirm',
// 		'username' => 'required'
// 	);

// 	$validation = Validator::make(Input::all(), $rules);

// 	if ($validation->fails()){
// 		return Redirect::to('registration')->withErrors
// 		($validation)->withInput();
// 	}

// 	$user = new \App\User;
// 	$user->email = Input::get('email');
// 	$user->password = Hash::make(Input::get('password'));
// 	$user->username = Input::get('username');
// 	$user->admin = Input::get('admin') ? 1 : 0;

// 	if ($user->save()){
// 		Auth::loginUsingId($user->id);
// 		return Redirect::to('profile');
// 	}
// 	return Redirect::to('registration')->withInput();
// }));


// Route::get('profile', function(){
// 	if (Auth::check()){
// 		return View::make('profile')->with('user',
// 		Auth::user());
// 	}
// 	else{
// 		return Redirect::to('login')->with('login_error',
// 		'You must login first.');
// 	}
// });



// Route::post('login', function(){
// 	$user = array(
// 		'email' => Input::get('email'),
// 		'password' => Input::get('password')
// 	);

// 	if (Auth::attempt($user)){
// 		return Redirect::to('profile');
// 	}
// 		return Redirect::to('login')->with('login_error',
// 		'Could not log in.');
// });

Route::get('secured', array('before' => 'auth', function(){
	return 'This is a secured page!';
}));

// Route::get('profile-edit', function(){

// 	if (Auth::check()){
// 		$user = Input::old() ? (object) Input::old() :
// 		Auth::user();
// 		return View::make('profile-edit')->with('user', $user);
// 	}
// });

// Route::post('profile-edit', function(){
// 	$rules = array(
// 		'email' => 'required|email',
// 		'password' => 'same:password_confirm',
// 		'username' => 'required'
// 	);

// 	$validation = Validator::make(Input::all(), $rules);

// 	if ($validation->fails()){
// 		return Redirect::to('profile-edit')->withErrors
// 		($validation)->withInput();
// 	}

// 	$user = \App\User::find(Auth::user()->id);
// 	$user->email = Input::get('email');

// 	if (Input::get('password')) {
// 		$user->password = Hash::make
// 		(Input::get('password'));
// 	}

// 	$user->username = Input::get('username');

// 	if ($user->save()){
// 		return Redirect::to('profile')->with('notify', 'Information updated');
// 	}
// 	return Redirect::to('profile-edit')->withInput();
// });





