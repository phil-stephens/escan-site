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
			    <h1 class="page-header">Partner Application Form</h1>

			    <?php if( ! empty($msg)) { ?>
			    <div class="alert alert-success"><?= $msg ?></div>
			    <?php } ?>
			    
			    <form method="POST" role="form">

				    <div class="form-group">
						<label for="company_name">Company Name *</label>
						<input type="text" class="form-control" id="company_name" name="company_name" required>
					</div>

					<div class="form-group">
						<label for="address">Street Address *</label>
						<input type="text" class="form-control" id="address" name="address" required>
					</div>

					<div class="form-group">
						<label for="city">City *</label>
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
						<label for="email">Email Address *</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>

					<div class="form-group">
						<label for="principal_phone">Principal Phone *</label>
						<input type="text" class="form-control" id="principal_phone" name="principal_phone" required>
					</div>

					<div class="form-group">
						<label for="secondary_phone">Secondary Phone</label>
						<input type="text" class="form-control" id="secondary_phone" name="secondary_phone">
					</div>

					<div class="form-group">
						<label for="abn">ABN</label>
						<input type="text" class="form-control" id="abn" name="abn">
					</div>

					<div class="form-group">
						<label for="acn">ACN</label>
						<input type="text" class="form-control" id="acn" name="acn">
					</div>

					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" class="form-control" id="website" name="website">
					</div>

					<div class="form-group">
						<label for="business_type">Business Type *</label>
						
						<select class="form-control" name="business_type" id="business_type" required>
							<option>Independent Consultant</option>
							<option>Reseller</option>
							<option>Application Development</option>
							<option>Retail Computer Shop</option>
						</select>
					</div>

					<div class="form-group">
						<label for="customer_base">Customer Base *</label>
						
						<select class="form-control" name="customer_base" id="customer_base" required>
							<option>Consumer</option>
							<option>SOHO</option>
							<option>SMB</option>
							<option>Medium Enterprise</option>
							<option>Large Enterprise</option>
							<option>Government/Military</option>
							<option>Educational</option>
						</select>
					</div>

					<div class="form-group">
						<label for="marketing_plan">Marketing Plan *</label>
						<textarea class="form-control" id="marketing_plan" name="marketing_plan" rows="6" required></textarea>
					</div>

					<div class="form-group">
						<label for="current_antivirus">Current Anti-Virus *</label>
						<textarea class="form-control" id="current_antivirus" name="current_antivirus"></textarea>
					</div>

					<button type="submit" class="btn btn-default btn-block">Submit Application</button>
			    </form>

			    

		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>