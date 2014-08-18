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
			    <h1 class="page-header"><span>e</span>Scan Products for Corporate Solutions</h1>

			    <p class="lead">eScan Products for Corporate Solutions is a complete security suite for Enterprises and Corporate which provides essential protection against viruses, objectionable content, hackers and privacy threats.</p>

			    <p>eScan Products for Corporate Solutions also consist of MailScan for Mail Servers that provides protection to both the mail servers and file servers from information security threats.</p>

			    <?php require 'site/_comparison.php'; ?>

			    <table class="table table-striped comparison-table">
				    <thead>
					    <tr>
					    	<th>eScan Feature</th>
					    	<?php foreach($_products['enterprise'] as $product => $link) { 
					    		echo '<th><a href="' . $link . '">eScan<br /><small>' . $product . '</small></a></th>';
					    	} ?>
					    </tr>
				    </thead>

				    <tbody>
					    <?php foreach($_features as $key => $group) {
					    	if( ! empty($key))
					    	{
					    		echo '<tr><td colspan="4"><h4>' . $key . '</h4></td></tr>';
					    	}

					    	foreach($group as $feature => $products)
					    	{
					    		echo '<tr><td>' . $feature . '</td>';
					    		foreach($products['enterprise'] as $product)
					    		{
					    			echo '<td>';
					    			echo '<i class="fa fa-' . (($product) ? 'check' : 'circle') . '"></i>';
					    			echo '</td>';
					    		}
					    		echo '</tr>';
					    	}
					    } ?>
				    </tbody>
				</table>

				<a href="/products/comparison" class="btn btn-default btn-block">Compare ALL eScan products</a>

		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>