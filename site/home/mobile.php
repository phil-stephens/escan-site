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
			    <h1 class="page-header"><span>e</span>Scan Mobile Security <span>for</span> Android</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/home/mobile-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>From a basic device used for communicating through calls and text messages, mobile phones have evolved into mini-computers. Today, mobile devices are useful in almost all aspects of our lifestyle - be it work, entertainment, social networking, banking or shopping.</p>

						<p>When connected to the internet, these android-based mobiles devices are as vulnerable to malware threats as computers, which can not only affect the operating system and applications of android devices, but the confidential data stored in these devices is also at risk. Hence, to ensure security from android malware, eScan introduces a specially designed security solution, eScan Mobile and Tablet Security for Android.</p>

						<?php
						$group = 'home';
						$key = 'mobile';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
				    	array(
				    		'icon'			=> 'fa-android',
				    		'title'			=> 'Advanced Technologies',
				    		'description'	=> "The advanced technologies of eScan Mobile Security for Android protects everything on your Android-based device against evolving viruses, malware, Trojans other such security threats, thus ensuring you its uninterrupted usage."
				    		),
						array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Effective Real-time Protection',
				    		'description'	=> "eScan Mobile Security for Android scans your device on real-time basis and provides protection against malware, Trojans & other cyber security threats. It automatically scans all newly downloaded and installed applications on your android-based mobile device, thus keeping your device safe from malware infections."
				    		),
						array(
				    		'icon'			=> 'fa-phone',
				    		'title'			=> 'Call and SMS Filter',
				    		'description'	=> "eScan Mobile Security for Android facilitates content filtering of calls and SMSs based on parameters set through its Whitelist and Blacklist feature. A user can block calls and SMSs from specified numbers based on specific phrases/ words/ keywords.

Under the Whitelist feature, only whitelisted calls and messages are allowed to the device, while all other calls and messages are blocked.

Under the Blacklist feature, all calls and messages are allowed to the device, except the ones which are added to the blacklist."
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
				    		'description'	=> "eScan Mobile Security for Android comes with an Application Control feature that blocks access to applications, unless specified. By default, all downloaded applications are blocked and access to these applications is only allowed by entering the eScan Mobile Security password."
				    		),
						array(
				    		'icon'			=> 'fa-calendar',
				    		'title'			=> 'Scheduled Scanning',
				    		'description'	=> "eScan Mobile Security for Android facilitates scheduled scanning of your android-based mobile devices, thus providing you the best protection against evolving cyber security threats. It performs scheduled scans in the background, either for all the files/directories in the internal and external storage or the entire device at your desired time."
				    		),
						array(
				    		'icon'			=> 'fa-exclamation-triangle',
				    		'title'			=> 'Privacy Advisor',
				    		'description'	=> "eScan Mobile Security for Android comprises of Privacy Advisor that provides you the complete list of application using device permissions in a classified format. This helps you to keep a check on the security level of all applications installed."
				    		),
						array(
				    		'icon'			=> 'fa-lock',
				    		'title'			=> 'Anti-Theft',
				    		'description'	=> "eScan Mobile Security for Android helps you in blocking, data wiping, SIM watching, and locating your phone through GPS finder. With its Anti-Theft feature, eScan ensures complete protection to your phone from any unauthorized access on the event if your phone device is lost or stolen."
				    		),
						array(
				    		'icon'			=> 'fa-tachometer',
				    		'title'			=> 'User-Friendly GUI',
				    		'description'	=> "eScan Mobile Security for Android has a trendy Graphical User Interface that is designed to suit the needs of both novice and expert users. It has a sleek intuitive design that is simple and easy-to-use. eScan Mobile Security requires very less memory to operate, and hence does not affect the performance of your mobile device."
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