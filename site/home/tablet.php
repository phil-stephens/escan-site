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
			    <h1 class="page-header"><span>e</span>Scan Tablet Security <span>for</span> Android</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/home/tablet-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>Today, Tablets have become more popular as they serve as stand-ins for computers. Hence, they are as vulnerable to cyber security threats as computers.</p>

						<p>eScan Tablet Security for Android is specially designed security solution for Android-based tablet devices that helps you secure your device and confidential data stored in it against viruses, malware, Trojans, and other evolving cyber security threats.</p>

						<?php
						$group = 'home';
						$key = 'tablet';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
						array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Effective Real-time Protection',
				    		'description'	=> "eScan Tablet Security for Android scans your device on real-time basis and provides protection against malware, Trojans & other cyber security threats. It automatically scans all newly downloaded and installed applications on your tablet device, thus keeping your android-based tablet device safe from malware infections."
				    		),
						array(
				    		'icon'			=> 'fa-calendar',
				    		'title'			=> 'Scheduled Scanning',
				    		'description'	=> "eScan Tablet Security for Android facilitates scheduled scanning of your android-based tablet devices, thus providing you the best protection against evolving cyber security threats. It performs scheduled scans in the background, either for all the files/directories in the internal and external storage or the entire device at your desired time."
				    		),
						array(
				    		'icon'			=> 'fa-history',
				    		'title'			=> 'Backup and Restore of Contacts and SMSs',
				    		'description'	=> "eScan Mobile Security for Android facilitates backup of all contacts and SMSs on to the memory card. Whenever required, the backed up data can also be easily restored to the device."
				    		),
						array(
				    		'icon'			=> 'fa-ban',
				    		'title'			=> 'Effective Web Protection and Parental Control',
				    		'description'	=> "eScan Mobile Security for Android facilitates you with advanced web protection and parental control features that provides an extra layer of security to your android-based mobile device. It categorizes and detects the web sites that the user visits when using Android's default browser, and blocks phishing or malware infected web sites in real-time, thus safeguarding android-based mobile device against evolving cyber threats. In addition, it restricts access to all other browsers installed on the device. To avoid threats and infections, the user is not allowed to access any other browser installed on the device."
				    		),
						array(
				    		'icon'			=> 'fa-cogs',
				    		'title'			=> 'Effective Application Control',
				    		'description'	=> "eScan Tablet Security for Android comes with an Application Control feature that blocks access to applications, unless specified. By default, all downloaded applications are blocked and access to these applications is only allowed by entering the eScan Tablet Security password."
				    		),
						array(
				    		'icon'			=> 'fa-lock',
				    		'title'			=> 'Anti-Theft',
				    		'description'	=> "eScan Tablet Security for Android ensures complete protection to your Tablet by preventing unauthorized access in the event your device is lost or stolen. In order to take benefit of this feature, you will need to either login to your existing eScan Anti-Theft account or create a new account.

eScan now comes with Wipe Data feature that helps users to remotely delete Call logs and SMSs from devices that are either lost or stolen. They can even remotely restrict access to their device by enabling Device Block feature.

The Locate Device feature helps track the location of the lost Tablet through GPS finder. Users can also locate their device with the help of Scream feature in case the device has been misplaced."
				    		),
						array(
				    		'icon'			=> 'fa-exclamation-triangle',
				    		'title'			=> 'Privacy Advisor',
				    		'description'	=> "eScan Mobile Security for Android comprises of Privacy Advisor that provides you the complete list of application using device permissions in a classified format. This helps you to keep a check on the security level of all applications installed."
				    		),
						array(
				    		'icon'			=> 'fa-tachometer',
				    		'title'			=> 'User-Friendly GUI',
				    		'description'	=> "eScan Tablet Security for Android has a trendy Graphical User Interface that is designed to suit the needs of both novice and expert users. It has a sleek intuitive design that is simple and easy-to-use. eScan Tablet Security requires very less memory to operate and hence does not affect the performance of your tablet device."
				    		),
						array(
				    		'icon'			=> 'fa-comments',
				    		'title'			=> '24&times;7 Free Online Technical Support',
				    		'description'	=> "eScan provides 24&times;7 FREE online technical support via e-mail, live chat, and forums to all our customers by our experts round the clock."
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