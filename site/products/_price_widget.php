<?php include 'site/_products.php' ?>

<!-- Pricing widget -->
<div class="clearfix payment-panel">
	<form method="POST" action="/estore/add" role="form" id="price-widget-<?= $_products[$group][$key]['pid'] ?>" onsubmit="updatePrice('<?= $_products[$group][$key]['pid'] ?>'); return true;">
		<div class="col-xs-7">
			<p>I would like to protect 
			<span>
				<select class="form-control" name="users" onchange="updatePrice('<?= $_products[$group][$key]['pid'] ?>');">
					<?php foreach($_products[$group][$key]['mod_u'] as $users => $value) { ?>
					<option><?= $users ?></option>
					<?php } ?>
				</select>
			</span>
			<?= $_products[$group][$key]['protectee'] ?>(s)</p>

			<p>for
				<select class="form-control" name="years" onchange="updatePrice('<?= $_products[$group][$key]['pid'] ?>');">
					<?php foreach($_products[$group][$key]['mod_y'] as $years => $value) { ?>
					<option><?= $years ?></option>
					<?php } ?>
				</select>
			year(s)</p>
		</div>

		<div class="col-xs-4 pull-right price">
			<input type="hidden" name="pid" value="<?= $_products[$group][$key]['pid'] ?>">
			<input type="hidden" name="base_price" value="<?= $_products[$group][$key]['base_price'] ?>">
			<input type="hidden" name="purchase_price" value="<?= $_products[$group][$key]['base_price'] ?>">
			<input type="hidden" name="name" value="<?= $_products[$group][$key]['name'] ?>">
			<input type="hidden" name="protectee" value="<?= $_products[$group][$key]['protectee'] ?>">

			<div class="price-block">
				<span id="price-field-<?= $_products[$group][$key]['pid'] ?>">$<?= $_products[$group][$key]['base_price'] ?></span>
				<br /><small>(AUD inc. GST)</small>
			</div>
		</div>

		<button type="submit" class="btn btn-default btn-block">Add to Cart <i class="fa fa-shopping-cart"></i></button>
	</form>
</div>

<script type="text/javascript">
<!--
	function updatePrice(Id)
	{
		//$('.price-block', '#price-widget-' + Id).hide();
		//$('.price', '#price-widget-' + Id).spin();
		
		var users = $('select[name="users"]', '#price-widget-' + Id).val();
		var years = $('select[name="years"]', '#price-widget-' + Id).val();
		var base = $('input[name="base_price"]', '#price-widget-' + Id).val();

		var mod_u;
		switch(users)
		{
			<?php foreach($_products[$group][$key]['mod_u'] as $users => $value) { ?>
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
			<?php foreach($_products[$group][$key]['mod_y'] as $years => $value) { ?>
			case '<?= $years ?>':
				mod_y = <?= $value ?>;
				break;
			<?php } ?>
			default:
				mod_u = 1;
				break;
		}

		var purchase_price = (base * mod_u * mod_y).toFixed(2);
		$('#price-field-' + Id).html('$' + purchase_price);
		$('input[name="purchase_price"]', '#price-widget-' + Id).val(purchase_price);
	}
-->
</script>
<!-- /Pricing widget -->