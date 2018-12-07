<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DishesController extends Controller
{
    public function dish_list()
    {
    	$dishes = DB::table('dishes')->get();
		// return view('dishes')->with('dishes', $dishes)
		// 					 ->nest('cart', 'cart', array('cart_dishes' =>
		// 					   Session::get('cart')));

		$breadcrumb = 'DISHES';

		return view('dishes', compact('dishes', 'breadcrumb'))
							 ->nest('cart', 'cart', array('cart_dishes' =>
							   Session::get('cart')));
    }

    public function dish_detail($id)
    {
    	$dish = DB::table('dishes')->find($id);
		return view('dish-detail')->with('dish', $dish)
								  ->nest('cart', 'cart', array('cart_dishes' =>
									Session::get('cart')));
    }


    public function add_dish($id)
    {
    	$dish = DB::table('dishes')->find($id);
		$cart = Session::get('cart');
		$cart[uniqid()] = array ('id' => $dish->id, 'name' => $dish->name, 
								 'price' => $dish->price);
		Session::put('cart', $cart);
		return Redirect::to('dishes');
    }



    public function remove_dish($key)
    {
    	$cart = Session::get('cart');
		unset($cart[$key]);
		Session::put('cart', $cart);
		return Redirect::to('dishes');
    }

    public function empty_cart()
    {
    	Session::forget('cart');
		return Redirect::to('dishes');
    }
}
