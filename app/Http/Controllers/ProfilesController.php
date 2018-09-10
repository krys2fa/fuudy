<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{
   	public function profile()
   	{
   		if (Auth::check()){
			return view('profile')->with('user',
			Auth::user());
		}
		else{
			return Redirect::to('login')->with('login_error',
			'You must login first.');
		}
   	}


   	public function edit()
   	{
   		
		if (Auth::check()){
			$user = Input::old() ? (object) Input::old() :
			Auth::user();
			return view('profile-edit')->with('user', $user);
		}

   	}

   	public function update()
   	{
   		$rules = array(
		'email' => 'required|email',
		'password' => 'same:password_confirm',
		'username' => 'required'
	);

		$validation = Validator::make(Input::all(), $rules);

		if ($validation->fails()){
			return Redirect::to('profile-edit')->withErrors
			($validation)->withInput();
		}

		$user = \App\User::find(Auth::user()->id);
		$user->email = Input::get('email');

		if (Input::get('password')) {
			$user->password = Hash::make
			(Input::get('password'));
		}

		$user->username = Input::get('username');

		if ($user->save()){
			return Redirect::to('profile')->with('notify', 'Information updated');
		}
		return Redirect::to('profile-edit')->withInput();
	   	}
}
