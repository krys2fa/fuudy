<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dish List</title>
	</head>

	<body>
		<div>
			<?php foreach ($dishes as $dish): ?>
			<p>
				<a href="dish-detail/<?= $dish->id ?>">
				<?= $dish->name ?>
				</a> 
				<a href="add-dish/<?= $dish->id ?>"> (Add to Cart)</a>
				<a href="empty-cart"> (Empty Cart)</a>
			</p>

			<?php endforeach; ?>

		</div>

		<?php $cart_session = Session::get('cart') ?>
		<?php if ($cart_session): ?>
		<?= $cart ?>
		<?php endif; ?>

	</body>
	</html>