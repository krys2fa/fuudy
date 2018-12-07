@extends('app')
@section('content')

	<div>
		<h2><?= $restaurant->name ?></h2>
		<p>Email: <?= $restaurant->email ?></p>
		<p>Location: <?= $restaurant->location ?></p>
		<p>Telephone: <?= $restaurant->telephone ?></p>
			
		<p><a href="../restaurants">Restaurants</a></p>
	</div>

@stop