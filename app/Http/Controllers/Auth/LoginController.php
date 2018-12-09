<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function create()
    {
        return view('login');
    }

    public function store(){
        $user = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($user)){
            
            $dish_count = DB::table('dishes')->count();

            $restaurant_count = DB::table('restaurants')->count();

            Session::put('dish_count', $dish_count);
            Session::put('restaurant_count', $restaurant_count);

            return Redirect::to('dishes');
        }
        return Redirect::to('login')->with('login_error',
        'Ooops! A problem occured logging in. Please try again....');
    }

    public function destroy(){
       // Session::flush();
        Auth::logout();
        return Redirect::to('login');
    }
}
