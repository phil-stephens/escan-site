<main>
    <div class="container">
	    <div class="row">
		    <!-- Sidebar -->
		    <div class="col-sm-3 sidebar">
				
		    </div>
		    <!-- /Sidebar -->

		    <!-- Content -->
		    <div class="col-sm-9">
			    <h1 class="page-header"><span>e</span>Store</h1>

			    <h2>Shopping Cart</h2>

			    <?php if( ! empty($msg)) { ?>
			    <div class="alert alert-success"><?= $msg ?></div>
			    <?php } ?>

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
							<td colspan="2">Total: $<?= $total_price ?></td>

						</tr>
					</tbody>
				</table>

				<div class="row">
					<div class="col-sm-6">
						<a href="/estore" class="btn btn-default btn-block"><i class="fa fa-sort-desc fa-rotate-90"></i> Continue Shopping</a>
					</div>

					<div class="col-sm-6">
						<a href="/estore/checkout" class="btn btn-default btn-block">Proceed to Checkout <i class="fa fa-sort-desc fa-rotate-270"></i></a>
					</div>

				</div>
				<?php } else { ?>
				<p><strong>Your shopping cart is empty.</strong></p>

				<a href="/estore" class="btn btn-default btn-block"><i class="fa fa-sort-desc fa-rotate-90"></i> Continue Shopping</a>
				<?php } ?>
		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>