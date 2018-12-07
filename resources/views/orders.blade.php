@extends('app')
			
@section('content')

	<h2>Orders</h2>

	@foreach ($orders as $order)

	<p> 
		<a href="/orders/{{ $order->id }}"> {{ $order->name }} </a>
	</p>
			

	@endforeach

@stop