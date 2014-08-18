<main>
    <div class="container">
	    <div class="row">
		    <!-- Sidebar -->
		    <div class="col-sm-3 sidebar">
				<?= $side_nav ?>
		    </div>
		    <!-- /Sidebar -->

		    <!-- Content -->
		    <div class="col-sm-9">
			    <h1 class="page-header"><span>e</span>Store</h1>

			    <h3></h3>

			    <?php 
			    include 'site/_products.php'; 

			    foreach($_products[$group] as $key => $product) { ?>
			    
			    <section class="estore-listing">
				    <div class="row">
				    	<div class="col-sm-3">
						    <!-- Image -->
						    <img src="<?= $product['img'] ?>" class="img-responsive">
					    </div>

					    <div class="col-sm-9">
						    <h3><?= $product['name'] ?></h3>

						    <p><?= nl2br($product['description']) ?></p>

						    <p><a href="<?= $product['link'] ?>">Read more...</a></p>


						    <!-- Pricing widget -->
							<div class="clearfix payment-panel">
								<form method="POST" action="/estore/add" role="form" id="price-widget-<?= $product['pid'] ?>" onsubmit="updatePrice<?= $product['pid'] ?>(); return true;">
									<div class="col-xs-7">
										<p>I would like to protect 
										<span>
											<select class="form-control" name="users" onchange="updatePrice<?= $product['pid'] ?>();">
												<?php foreach($product['mod_u'] as $users => $value) { ?>
												<option><?= $users ?></option>
												<?php } ?>
											</select>
										</span>
										<?= $product['protectee'] ?>(s)</p>

										<p>for
										<select class="form-control" name="years" onchange="updatePrice<?= $product['pid'] ?>();">
											<?php foreach($product['mod_y'] as $years => $value) { ?>
												<option><?= $years ?></option>
												<?php } ?>
										</select>
										year(s)</p>
									</div>

									<div class="col-xs-4 pull-right price">
										<input type="hidden" name="pid" value="<?= $product['pid'] ?>">
										<input type="hidden" name="base_price" value="<?= $product['base_price'] ?>">
										<input type="hidden" name="purchase_price" value="<?= $product['base_price'] ?>">
										<input type="hidden" name="name" value="<?= $product['name'] ?>">
										<input type="hidden" name="protectee" value="<?= $product['protectee'] ?>">
										<span id="price-field-<?= $product['pid'] ?>">$<?= $product['base_price'] ?></span>
										<br /><small>(AUD inc. GST)</small>
									</div>

									<button type="submit" class="btn btn-default btn-block">Add to Cart <i class="fa fa-shopping-cart"></i></button>
								</form>
							</div>

							<script type="text/javascript">
							<!--
								function updatePrice<?= $product['pid'] ?>()
								{
									var users = $('select[name="users"]', '#price-widget-<?= $product['pid'] ?>').val();
									var years = $('select[name="years"]', '#price-widget-<?= $product['pid'] ?>').val();
									var base = $('input[name="base_price"]', '#price-widget-<?= $product['pid'] ?>').val();

									var mod_u;
									switch(users)
									{
										<?php foreach($product['mod_u'] as $users => $value) { ?>
										case '<?= $users ?>':
											mod_u = <?= $value ?>;
											break;
										<?php } ?>
										default:
											mod_u = 1;
											break;
									}

									var mod_y;
									switch(years)
									{
										<?php foreach($product['mod_y'] as $years => $value) { ?>
										case '<?= $years ?>':
											mod_y = <?= $value ?>;
											break;
										<?php } ?>
										default:
											mod_u = 1;
											break;
									}

									var purchase_price = (base * mod_u * mod_y).toFixed(2);
									$('#price-field-<?= $product['pid'] ?>').html('$' + purchase_price);
									$('input[name="purchase_price"]', '#price-widget-<?= $product['pid'] ?>').val(purchase_price);
								}
							-->
							</script>
							<!-- /Pricing widget -->

					    </div>

				    </div>

			    </section>


			    <?php } ?>


		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>