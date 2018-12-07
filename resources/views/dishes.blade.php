@extends('app')
@section('content')

	<div>
		<h2 style='margin:20px;'>DISHES</h2>
		<?php foreach ($dishes as $dish): ?>
		
		<div class='col-sm-12'>
			<div class='col-sm-8'>
				<a href="dish-detail/<?= $dish->id ?>">
					<h4><img src="images/photos/food.jpeg" alt="" class='img-circle'>
					<?= $dish->name ?></h4>
				</a> 
			</div>
			

			<div class='col-sm-4'>

				<div style='margin:40px'>

					<button class='btn btn-primary' style='color:white'>
						<i class='fa fa-shopping-cart'></i>
						<a href="add-dish/<?= $dish->id ?>" style='color:white'> Add to Cart</a>
					</button>

					<button class='btn btn-danger' style='color:white'>
						<i class='fa fa-trash-o'></i>
						<a href="remove-dish/<?= $dish->id ?>" style='color:white'> Remove from Cart</a>
					</button>

				</div>

			</div>
			
		</div>

		<hr/>

		<?php endforeach; ?>

	</div>

	<?php $cart_session = Session::get('cart') ?>
	<?php if ($cart_session): ?>
	<?= $cart ?>
	<?php endif; ?>



	<button class='btn btn-danger' style='color:white;margin:20px'>
					<i class='fa fa-trash-o'></i>
					<a href="empty-cart" style='color:white'> Empty Cart</a>
	</button>

@stop