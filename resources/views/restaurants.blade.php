@extends('app')
			
@section('content')
			
	<h2>Restaurants</h2>

	@foreach ($restaurants as $restaurant)

	<p> 
		<a href="/restaurant-detail/{{ $restaurant->id }}"> {{ $restaurant->name }} </a>
	</p>
			

@endforeach

@stop
