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
			    <h1 class="page-header">Contact Us</h1>

			    <?php if( ! empty($msg)) { ?>
			    <div class="alert alert-success"><?= $msg ?></div>
			    <?php } ?>

			    <form method="POST" action="/contact" role="form">

				    <div class="form-group">
						<label for="subject">Subject *</label>
						<select class="form-control" id="subject" name="subject" required>
							<?php
							$fields = array(
											'sales'		=> 'Sales or License Enquiry',
											'support'	=> 'Technical Support',
											'refund'	=> 'Request a refund'
											);

							foreach($fields as $val => $field)
							{
								echo '<option value="' . $val . '"';
								echo ( isset($subject) && $subject == $val) ? ' selected' : '';
								echo '>' . $field . '</option>';
							}
							?>
						</select>
					</div>

				    <div class="form-group">
						<label for="name">Your Name *</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>

					<div class="form-group">
						<label for="email">Your Email Address *</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>

					<div class="form-group">
						<label for="message">Your Message *</label>
						<textarea class="form-control" id="message" name="message" rows="10" required></textarea>
					</div>

					<button type="submit" class="btn btn-default btn-block">Submit</button>
			    </form>

			    <h3>Website owned &amp; operated by eScan Australia Pty Ltd</h3>

				<address>
					<strong>eScan Distributor In Australia, New Zealand and Oceania </strong><br />
					PO Box 546<br />
					Gatton<br />
					QLD 4343<br />
					Australia
				</address>
			    
			    <h3>Sales or License Enquiries</h3> 

				<p>If you have a sales or license enquiry, Contact our Sales Office using the form above<br /> 
				or by phone: <strong>+61 (0)7 3071 7495</strong> (Mon-Fri 9am to 5pm)<br />
				(EST - Please note Queensland is not on daylight saving)</p> 
 

				<h3>Technical Support</h3>

				<p>For eScan product support, Contact our Support Office using the form above.</p>

		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>