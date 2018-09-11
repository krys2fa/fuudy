<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Dish: <?= $dish->name ?></title>
	</head>

	<body>
		<div>
			<h2><?= $dish->name ?></h2>
			<p>Price: <?= $dish->price ?></p>
			<p>Description: <?= $dish->description ?></p>
			<p>
			<a href="../add-dish/<?= $dish->id ?>">Add to Cart</a>
			</p>
			<p><a href="../dishes">Dishes</a></p>
		</div>

		<? if (Session::has('cart')): ?>
		<?= $cart ?>
		<? endif; ?>
	</body>
</html>