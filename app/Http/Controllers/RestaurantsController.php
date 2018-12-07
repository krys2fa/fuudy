<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantsController extends Controller
{
    public function create()
    {
    	$restaurants = DB::table('restaurants')->get();
    	return view('restaurants', compact('restaurants'));
    }



    public function restaurant_detail($id)
    {
    	$restaurant = DB::table('restaurants')->find($id);
    	return view('restaurant-detail', compact('restaurant'));
    }
}
