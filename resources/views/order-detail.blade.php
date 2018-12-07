@extends('app')
@section('content')


	<div>
		<h2><?= $order->name ?></h2>
		<p>Order Status: <?= $order->order_status ?></p>
		<p>Description: <?= $order->description ?></p>
		<p>Quantity: <?= $order->quantity ?></p>
		<p>Price: <?= $order->price ?></p>
			
		<p><a href="../orders">Orders</a></p>
	</div>

@stop