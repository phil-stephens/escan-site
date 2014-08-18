<h4>Shopping Cart</h4>

<?php if( ! empty($_SESSION['cart'])) { ?>
<table class="table table-striped table-condensed">
	<tbody>
		<?php 
		$total_price = 0;
		foreach($_SESSION['cart'] as $key => $item) { ?>
		<tr>
			<td>
				<h5><?= $item['name'] ?></h5>
				
				<p class="pull-left"><small><?= ucwords($item['protectee']) ?>s: <?= $item['users'] ?><br />
				Years: <?= $item['years'] ?></small></p>

				<h5 class="pull-right">$<?= $item['purchase_price'] ?></h5>
			</td>

			<td>
				<form role="form" method="post" action="/estore/remove" class="remove-cart" onsubmit="return confirm('Are yo sure you want to remove \'<?= $item['name'] ?>\' from your shopping cart?');">
					<input type="hidden" name="id" value="<?= $key ?>">
					<button type="submit"><i class="fa fa-trash-o"></i></button>
				</form>
			</td>
		</tr>
		<?php 
		$total_price += $item['purchase_price'];
		} ?>
		

		<tr>
			<td colspan="2">
				<p>Total: $<?= $total_price ?></p>

				<p><a href="/estore/cart">View Cart</a></p>
			</td>
		</tr>
	</tbody>
</table>

<?php } else { ?>
<p><strong>Your shopping cart is empty</strong></p>
<?php } ?>

<div class="well">
	<p>A Money Back Guarantee is valid up to 14 days after purchase for all products from this estore.</p>

	<p>Please use our <a href="/contact/refund">contact page</a> to request a refund.</p>
</div>

<p class="text-center">
	<img src="/assets/img/geotrust.png">
</p>