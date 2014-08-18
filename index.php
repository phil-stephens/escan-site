<?php
// Temporary security whilst in dev
if(in_array($_SERVER['SERVER_NAME'], array('escan.international', 'www.escan.international')))
{
	die('Coming soon...');
}

// File really starts here...
session_start();

include 'lib/Router/Router.php';

$app = new \OtherTribe\Router(array(
								'template_path' => 'site/',
								'layout'		=> 'layouts/default.php'
								));
/*
* Lots of route definitions
*/
$app->get('/', function() use ($app) {
	$app->view('homepage.php', array('_js' => array('/assets/js/jquery.equalheight.js')));
});

$app->group('/about', function() use ($app) {

	$global = array(
					'side_nav'	=> $app->view('about/_sidenav.php', null, TRUE, FALSE)
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('about/index.php', $global);
	});

	foreach(array('technology', 'privacy', 'terms') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view("about/{$route}.php", $global);
		});
	}
});

$app->group('/products', function() use ($app) {

	$global = array(
					'top_nav'			=> 'root',
					'current_section'	=> 'products'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('products/index.php', $global);
	});

	$app->get('/comparison', function() use ($app, $global) {
		$app->view('products/comparison.php', $global);
	});

});


/* -------------- Contact Form -------------- */
/*$app->get('/contact', function() use ($app) {
	$app->view('about/contact.php', array(
										'side_nav'			=> $app->view('about/_sidenav.php', null, TRUE, FALSE),
										'current_section'	=> 'contact'
										));
});*/

$app->group('/contact', function() use ($app) {
	$global = array(
					'side_nav'			=> $app->view('about/_sidenav.php', null, TRUE, FALSE),
					'current_section'	=> 'contact'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('about/contact.php', $global);
	});

	foreach(array('support', 'refund') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view('about/contact.php', array_merge($global, array('subject' => $route)) );
		});
	}
});

$app->post('/contact', function() use ($app) {
	
	try
	{
		require_once 'lib/Mandrill/Mandrill.php';
		$mandrill = new Mandrill('2k9LYwqbhJJYRH3sKOFyYw');

		// Is it support or sales?
		switch($_POST['subject'])
		{
			case 'sales':
				$subject = 'Sales/Licensing Enquiry';
				$to = 'p.stephens@fweb.com.au';
				break;

			case 'support';
				$subject = 'Technical Support Request';
				$to = 'p.stephens@fireworkswebsites.com.au';
				break;

			case 'refund';
				$subject = 'Refund Request';
				$to = 'p.stephens@fireworkswebsites.com.au';
				break;
		}

		// Build the HTML message
		ob_start();
			
		include 'site/email/contact.php';
		
		$content = ob_get_clean();
		
		$message = array(
						'html'	=> $content,
						'subject'	=> $subject,
						'from_email'	=> 'noreply@escan.international',
						'to'			=> array(
												array(
													'email'	=> $to
													)
											)

						);

		$mandrill->messages->send($message);

	} catch( Mandrill_Error $e)
	{
		throw $e;
	}

	$app->view('about/contact.php', array(
										'side_nav'			=> $app->view('about/_sidenav.php', null, TRUE, FALSE),
										'current_section'	=> 'contact',
										'msg'				=> 'Thank you for your enquiry - we will be in touch shortly.'
										));
});

$app->group('/home', function() use ($app) {

	$global = array(
					'side_nav'			=> $app->view('home/_sidenav.php', null, TRUE, FALSE),
					'top_nav'			=> 'home',
					'current_section'	=> 'products',
					'_js'				=> '/assets/js/spin.min.js'
					);
	
	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('home/index.php', $global);
	});
	
	foreach(array('total', 'antivirus', 'internet', 'linux', 'mac', 'mobile', 'tablet') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view("home/{$route}.php", $global);
		});
	}
});

$app->group('/smb', function() use ($app) {

	$global = array(
					'side_nav'	=> $app->view('smb/_sidenav.php', null, TRUE, FALSE),
					'top_nav'	=> 'smb',
					'current_section'	=> 'products'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('smb/index.php', $global);
	});
	
	foreach(array('antivirus', 'internet', 'linux') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view("smb/{$route}.php", $global);
		});
	}

});

$app->group('/enterprise', function() use ($app) {

	$global = array(
					'side_nav'	=> $app->view('enterprise/_sidenav.php', null, TRUE, FALSE),
					'top_nav'	=> 'enterprise',
					'current_section'	=> 'products'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('enterprise/index.php', $global);
	});
	
	foreach(array('corporate', 'enterprise', 'linux') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view("enterprise/{$route}.php", $global);
		});
	}

});

$app->get('/mailscan', function() use ($app) {
		$app->view('mailscan.php', array(
										'top_nav'	=> 'mailscan',
										'current_section'	=> 'products'
										));
});

/* -------------- Renewals -------------- */
$app->get('/renewals', function() use ($app) {
	$app->view('renewals.php', array(
									'current_section'	=> 'renewals'
									));
});

$app->post('/renewals', function() use ($app) {
	echo 'Handle renewal API call';
});

/* -------------- Partners -------------- */
$app->group('/partners', function() use ($app) {
	$global = array(
					'side_nav'	=> $app->view('partners/_sidenav.php', null, TRUE, FALSE),
					'current_section'	=> 'partners'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('partners/index.php', $global);
	});

	$app->get('/apply', function() use ($app, $global) {
		$app->view('partners/apply.php', $global);
	});

	$app->post('/apply', function() use ($app, $global) {
		
		try
		{
			require_once 'lib/Mandrill/Mandrill.php';
			$mandrill = new Mandrill('2k9LYwqbhJJYRH3sKOFyYw');

			// Build the HTML message
			ob_start();
				
			include 'site/email/partner.php';
			
			$content = ob_get_clean();
			
			$message = array(
							'html'	=> $content,
							'subject'	=> 'New Partner Application',
							'from_email'	=> 'noreply@escan.international',
							'to'			=> array(
													array(
														'email'	=> 'p.stephens@fweb.com.au'
														)
												)

							);

			$mandrill->messages->send($message);

		} catch( Mandrill_Error $e)
		{
			throw $e;
		}

		$app->view('partners/apply.php', array_merge($global, array(
																	'msg'	=> 'Thank you for your application - we will be in touch shortly.'
																	)));


	});

});

$app->get('/downloads', function() use ($app) {
	
	$app->view('downloads/index.php', array(
											'current_section'	=> 'downloads'
											));
});


$app->group('/downloads/products', function() use ($app) {
	$global = array(
					'side_nav'	=> $app->view('downloads/products/_sidenav.php', null, TRUE, FALSE),
					'current_section'	=> 'downloads'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('downloads/products/index.php', $global);
	});

	foreach(array('home', 'smb', 'enterprise', 'mailscan', 'linux', 'mac', 'mobile', 'tablet', 'mwav') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view("downloads/products/{$route}.php", $global);
		});
	}
});

$app->group('/downloads/documentation', function() use ($app) {
	$global = array(
					'side_nav'	=> $app->view('downloads/documentation/_sidenav.php', null, TRUE, FALSE),
					'current_section'	=> 'downloads'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('downloads/documentation/index.php', $global);
	});

	foreach(array('home', 'smb', 'enterprise', 'registration') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view("downloads/documentation/{$route}.php", $global);
		});
	}

});

$app->group('/estore', function() use ($app) {
	$global = array(
					'side_nav'	=> $app->view('estore/_sidenav.php', null, TRUE, FALSE),
					'current_section'	=> 'estore'
					);

	$app->get(array('', '/'), function() use ($app, $global) {
		$app->view('estore/index.php', $global);
	});


	foreach(array('home', 'smb', 'enterprise', 'mailscan') as $route)
	{
		$app->get("/{$route}", function() use ($app, $global, $route) {
			$app->view('estore/listing.php', array_merge($global, array('group' => $route)));
		});
	}


	$app->get(array('/cart', '/add', '/remove'), function() use ($app, $global) {
		$app->view('estore/cart.php', $global);
	});

	$app->post('/add', function() use ($app, $global) {
		// Add to cart functionality
		$item = $_POST;

		$_SESSION['cart'][ md5(time()) ] = $item;
		
		$app->view('estore/cart.php', array_merge($global, array(
																'msg'	=> '<strong>' . $item['name'] . '</strong> added to cart'
																) ));
	});

	$app->post('/remove', function() use ($app, $global) {

		$item = ( ! empty($_SESSION['cart'][ $_POST['id'] ]) ) ? $_SESSION['cart'][ $_POST['id'] ] : null;

		$data = array();

		if( ! empty($item))
		{
			unset($_SESSION['cart'][ $_POST['id'] ]);
			$data = array(
						'msg'	=> '<strong>' . $item['name'] . '</strong> removed from cart'
						);
		}

		$app->view('estore/cart.php', array_merge($global, $data ));
	});

	$app->get('/checkout', function() use ($app, $global) {
		$app->view('estore/checkout.php', $global);
	});

	$app->post('/checkout', function() use ($app, $global) {
		echo 'Handle payment here';
	});
});

/*
* Phew, now that's all defined we can get down to the nitty-gritty...
*/

// Security checks?
//echo '<pre>';
//print_r($_SESSION['cart']);
//echo '</pre>';

$app->launch();

