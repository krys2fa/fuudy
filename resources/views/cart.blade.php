<div class="cart" style="border: 1px solid #555">
	<?php if ($cart_dishes): ?>
	<?php $price = 0 ?>
	<ul>

		<?php foreach ($cart_dishes as $cart_dish_key =>
			$cart_dish_value): ?>
		<?php $price += $cart_dish_value['price']?>
		<li>
		<?= $cart_dish_value['name'] ?>:
		<?= $cart_dish_value['price'] ?> (<a href="remove-dish/<?=
		$cart_dish_key ?>">remove</a>)
		</li>
		<?php endforeach; ?>

	</ul>

	<p><strong>Total: </strong> <?= $price ?></p>
	<?php endif; ?>
</div>