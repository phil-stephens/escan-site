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

			    <h2>Billing Details</h2>

			    <p>For a single license you must use a human name, not a company name. FIRST NAME and LAST NAME are required! Initials are NOT acceptable!</p>

				<p>Please ensure that your postal address and email address are correct before proceeding.</p>
			    
			    <form role="form" method="POST">
			    	<div class="form-group">
						<label for="email">Email Address *</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>

					<div class="form-group">
						<label for="confirm_email">Confirm Email Address *</label>
						<input type="email" class="form-control" id="confirm_email" name="confirm_email" required>
					</div>

					<div class="form-group">
						<label for="name">Full Name or Company Name *</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>

					<div class="form-group">
						<label for="contact_name">Contact Person</label>
						<input type="text" class="form-control" id="contact_name" name="contact_name">
					</div>

					<div class="form-group">
						<label for="address">Street Address *</label>
						<input type="text" class="form-control" id="address" name="address" required>
					</div>

					<div class="form-group">
						<label for="city">City/Suburb *</label>
						<input type="text" class="form-control" id="city" name="city" required>
					</div>

					<div class="form-group">
						<label for="state">State *</label>
						
						<div class="row">
							<div class="col-sm-4">
								<select class="form-control" name="state" id="state" required>
									<option>Australian Capital Territory</option>
									<option>New South Wales</option>
									<option>Northern Territory</option>
									<option>Queensland</option>
									<option>South Australia</option>
									<option>Tasmania</option>
									<option>Victoria</option>
									<option>Western Australia</option>
								</select>

							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="postcode">Postcode *</label>
						<input type="text" class="form-control" id="postcode" name="postcode" required>
					</div>

					<div class="form-group">
						<label for="phone">Phone *</label>
						<input type="text" class="form-control" id="phone" name="phone" required>
					</div>

					<div class="form-group">
						<label for="fax">Fax</label>
						<input type="text" class="form-control" id="fax" name="fax">
					</div>

					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" class="form-control" id="mobile" name="mobile">
					</div>

					<button type="submit" class="btn btn-default btn-block">Proceed to Payment</button>
			    </form>
		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>