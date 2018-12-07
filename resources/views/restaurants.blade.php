@extends('app')
			
@section('content')
			
	<h2 style='margin:20px;'>RESTAURANTS</h2>

	@foreach ($restaurants as $restaurant)
	
		<div class='col-sm-12'>
			<div class='col-sm-8'>
				<a href="restaurant-detail/{{ $restaurant->id }}">
				<h4><img src="images/photos/food.jpeg" alt="" class='img-circle'>
				{{ $restaurant->name }}</h4>
				</a> 
			</div>
		</div>

		<hr/>
			

	@endforeach

@stop
