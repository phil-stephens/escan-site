<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1140, initial-scale=1">
    <title>eScan</title>

    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon" />

    <!-- Stylesheet -->
    <link href="/assets/css/site.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <section class="container">
	        <nav class="navbar" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="/">eScan</a>
				</div>

	            <div class="collapse navbar-collapse" id="navbar-collapse">
	                <ul class="nav navbar-nav">
	                    <li class="<?= ( isset($current_section) && $current_section == 'estore') ? 'active' : '' ?>">
	                    	<a href="/estore"><span>e</span>Store 
	                    	<span class="badge"><?= ( ! empty($_SESSION['cart'])) ? count($_SESSION['cart']) : '' ?></span></a>
	                    </li>
	                    <li class="dropdown<?= ( isset($current_section) && $current_section == 'products') ? ' active' : '' ?>">
	                        <a href="/products" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>

	                        <ul class="dropdown-menu">
	                            <li><a href="/home">Home and Small Office</a></li>
	                            <li><a href="/smb">Small and Medium Business</a></li>
	                            <li><a href="/enterprise">Enterprise</a></li>
	                            <li><a href="/mailscan">Mail Servers</a></li>
	                        </ul>
	                    </li>
	                    <li class="<?= ( isset($current_section) && $current_section == 'renewals') ? 'active' : '' ?>"><a href="/renewals">Renewals</a></li>
	                    <li class="<?= ( isset($current_section) && $current_section == 'downloads') ? 'active' : '' ?>"><a href="/downloads">Downloads</a></li>
	                    <li class="<?= ( isset($current_section) && $current_section == 'partners') ? 'active' : '' ?>"><a href="/partners">Partners</a></li>
	                    <li class="<?= ( isset($current_section) && $current_section == 'contact') ? 'active' : '' ?>"><a href="/contact">Contact Us</a></li>
	                </ul>
	            </div>
	        </nav>
        </section>
    </header>

    <?php if(isset($top_nav)) { ?>
    <section class="subnav">
		<div class="container">
			<ul class="nav nav-tabs nav-justified">
				<li class="<?= ($top_nav == 'home') ? 'active' : '' ?>"><a href="/home">Home and Small Office</a></li>
	            <li class="<?= ($top_nav == 'smb') ? 'active' : '' ?>"><a href="/smb">Small and Medium Business</a></li>
	            <li class="<?= ($top_nav == 'enterprise') ? 'active' : '' ?>"><a href="/enterprise">Enterprise</a></li>
	            <li class="<?= ($top_nav == 'mailscan') ? 'active' : '' ?>"><a href="/mailscan">Mail Servers</a></li>
			</ul>
		</div>
	</section>
	<?php } ?>

    <?= $content ?>

    <footer>
    	<div class="trusted-certified">
	    	<div class="container">
	    		<img src="/assets/img/partner-logo-1.png" >
		    	Trusted and Certified
		    	<img src="/assets/img/partner-logo-2.png" >
	    	</div>
    	</div>

    	<div class="container footer-links">
	        <div class="row">
	            <div class="col-sm-3">
	                <ul class="first">
		                <li><a href="/about">About <span>e</span>Scan</a></li>
		                <li><a href="/partners">Partners</a></li>
		                <li><a href="/contact">Contact Us</a></li>
		                <li><a href="/about/privacy">Privacy Policy</a></li>
	                </ul>
	            </div>

	            <div class="col-sm-3">
	                <ul>
		                <li><a href="/home">Home and Small Office</a></li>
		                <li><a href="/smb">Small and Medium Business</a></li>
		                <li><a href="/enterprise">Enterprise</a></li>
	                    <li><a href="/mailscan">Mail Servers</a></li>
	                </ul>
	            </div>

	            <div class="col-sm-3">
	                <ul>
		                <li><a href="/estore"><span>e</span>Store</a></li>
		                <li><a href="/renewals">Renewals</a></li>
		                <li><a href="/downloads">Downloads</a></li>
		                <li><a href="/contact/support">Support</a></li>
	                </ul>
	            </div>

	            <div class="col-sm-3">
	                <!-- Card image -->
	                <p class="footer-payment-options">Pay by MasterCard and Visa with ANZ eGate</p>

	            </div>
	            
	        </div>

	        <div class="row">
	        	<div class="col-sm-6">
			        &copy; Copyright <?= date('Y') ?> eScan Australia Pty Ltd
			    </div>

			    <div class="col-sm-6">
		        	<a href="http://fweb.com.au" target="_blank" class="fw-credit pull-right">Created by Fireworks Websites</a>
		        </div>
	        </div>
	    </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- CDN the Bootstrap JS -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- Additional JS scripts -->
    <?php if( ! empty($_js)) {
    	if(is_array($_js))
    	{
    		foreach($_js as $script) {
	    		echo "<script src=\"{$script}\"></script>\n";
	    	}
    	} else
    	{
    		echo "<script src=\"{$_js}\"></script>\n";
    	}
    } ?>
</body>
</html>