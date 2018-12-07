<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function create()
    {
    	$orders = DB::table('orders')->get();
    	return view('orders', compact('orders'));
    }



    public function order_detail($id)
    {
    	$order = DB::table('orders')->find($id);
    	return view('order-detail', compact('order'));
    }
}
