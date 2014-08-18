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
			    <h1 class="page-header"><span>e</span>Scan Products for Small and Medium Business</h1>

			    <p class="lead">eScan for small and medium businesses has been developed, focusing on the growing security needs of the small and medium businesses. eScan 14 for SMB provides corporate level next generation protection to small and medium businesses from Viruses, Spyware, Spam, Phishing, Hacking, Data Theft and Zero day threats with a very low cost of ownership.</p>

			    <p>The centralized web-based administration console helps the network administrator set policies on client computers to prevent malware infections and increases productivity through web access control and application control.</p>

			    <?php require 'site/_comparison.php'; ?>

			    <table class="table table-striped comparison-table">
				    <thead>
					    <tr>
					    	<th>eScan Feature</th>
					    	<?php foreach($_products['smb'] as $product => $link) { 
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
					    		foreach($products['smb'] as $product)
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