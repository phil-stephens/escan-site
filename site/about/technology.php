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
			    <h1 class="page-header">Technologies and Features</h1>

			    <p><strong>MicroWorld Winsock Layer (MWL)</strong> is a revolutionary technology developed by MicroWorld. It's placed between the Winsock Layer and user's applications. MWL allows MicroWorld products to stop dangerous content at the transport layer, before it enters the application layer, and thus protect Information Systems round the clock.</p>

				<p>For tackling Spam and Phishing, MicroWorld employs a unique technology named Non Intrusive Learning Patterns (NILP). This adaptive mechanism can analyze each email according to the Behavioral Patterns of the user and can take an informed decision there after. It has the capability to learn on its own and can also incorporate regular research feeds from the MicroWorld Server.</p>


				<div class="row feature-container">
			    	<?php
				    $_features = array(
						array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Faster On-Demand Scanning',
				    		'description'	=> "eScan's new On-Demand Scanner with Cache Technology leads to faster scans and is light on system resources. Now, it can also scan USB drives, Spyware and Adware."
				    		),
						array(
				    		'icon'			=> 'fa-clock-o',
				    		'title'			=> 'Real-Time Virus & Content Scanning',
				    		'description'	=> "eScan does Real-Time virus scanning of files, emails, email attachments and websites including SMTP, POP3, HTTP and FTP traffic using the MWL Technology and AntiVirus Heuristic Algorithms. It also scans content for confidential data, prohibited content, offensive and obscene language."
				    		),
						array(
				    		'icon'			=> 'fa-cubes',
				    		'title'			=> 'Heuristic Scanning',
				    		'description'	=> "eScan's sophisticated AntiVirus Heuristic Algorithm detects unknown viruses, that are being continuously released in the wild and protects the users from zero day threats."
				    		),
						array(
				    		'icon'			=> 'fa-ban',
				    		'title'			=> 'AntiSpam',
				    		'description'	=> "eScan controls spam effectively using indigenous technologies such as NILP** and sophisticated Heuristic filters that work on the basis of specific keywords and phrases."
				    		),
						array(
				    		'icon'			=> 'fa-cloud',
				    		'title'			=> 'Web Protection',
				    		'description'	=> "eScan provides comprehensive Web Protection with an in-built Parental Control that blocks offensive and unsuitable websites as per the user's choice and the effective Pop-up Filter blocks all the Pop-ups saving bandwidth. With the option Privacy Protection, the users can now prevent their private and confidential data from being stolen from the browser cache."
				    		),
						array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Proactive Protection',
				    		'description'	=> "eScan monitors the registry for any changes and warns the user on detecting any changes in the registry. eScan also detects and warns about the applications that are suspicious in nature."
				    		),
						array(
				    		'icon'			=> 'fa-hdd-o',
				    		'title'			=> 'Endpoint Security',
				    		'description'	=> "Endpoint Security prevents data thefts and virus infections through USB/Firewire based portable devices such as Flash Drives, Pen Drives, Portable Hard Disks etc. Application Control allows you to block/permit applications on the networks/personal systems. Suspicious files/applications can also be detected. Windows 2008 NAP (Network Access Protection) support is available as default."
				    		),
						array(
				    		'icon'			=> 'fa-university',
				    		'title'			=> 'Firewall',
				    		'description'	=> "eScan's in-built Firewall monitors and logs both incoming and outgoing network activities in the system and protects it from all network based attacks."
				    		)
				    	);
					
					foreach($_features as $_f) { ?>
					<div class="media feature col-sm-10 col-sm-offset-1">
						<a class="icon">
							<i class="fa <?= $_f['icon'] ?> fa-fw"></i>
						</a>
						
						<div class="media-body">
					    	<h4 class="media-heading"><?= $_f['title'] ?></h4>
					    	
					    	<p><?= nl2br($_f['description']) ?></p>
				    		
					  	</div>
					</div>

					<?php } ?>
					
			    </div>
		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>