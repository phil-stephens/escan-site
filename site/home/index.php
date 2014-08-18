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
			    <h1 class="page-header"><span>e</span>Scan Products for Home Users</h1>

			    <p class="lead">eScan Total Security Suite, eScan Internet Security Suite and eScan Anti-Virus provide a comprehensive virus protection solution designed and developed to protect your personal computer against viruses, spyware, adware, malware, keyloggers and hackers.</p>

			    <p>They include Cloud Technology which provides fast response to the latest virus threats without waiting for daily or traditional virus signature updates. The comparison below will help you choose between the 3 products.</p>

			    <?php require 'site/_comparison.php'; ?>

			    <table class="table table-striped comparison-table">
				    <thead>
					    <tr>
					    	<th>eScan Feature</th>
					    	<?php foreach($_products['home'] as $product => $link) { 
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
					    		foreach($products['home'] as $product)
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