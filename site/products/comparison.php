<main>
    <div class="container">
    	<h1 class="page-header"><span>e</span>Scan Product Comparison</h1>

	    <?php require 'site/_comparison.php' ?>
	
		<table class="table table-striped comparison-table">
		    <thead>
			    <tr>
			    	<th>eScan Feature</th>
			    	<?php foreach($_products as $group) { 
			    		foreach($group as $product => $link) {
			    			echo '<th><a href="' . $link . '">eScan<br /><small>' . $product . '</small></a></th>';
			    		}
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
			    		foreach($products as $group)
			    		{
			    			foreach($group as $product)
			    			{
			    				echo '<td>';
				    			echo '<i class="fa fa-' . (($product) ? 'check' : 'circle') . '"></i>';
				    			echo '</td>';
			    			}
			    			
			    		}
			    		echo '</tr>';
			    	}
			    } ?>
		    </tbody>
		</table>

	</div>

</main>