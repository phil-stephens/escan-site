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
			    <h1 class="page-header"><span>e</span>Scan Anti-Virus <span>for</span> Mac</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/home/mac-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>Looking at the current scenario of security landscape, Mac OS X is now as vulnerable to malware attacks and other web based threats as any other operating systems. Growing popularity of Macintosh has led to a new platform of opportunity for cybercriminals. Malware exclusively for Mac OS are written and the numbers are increasing since 2009, surpassing 1,000,000 per year. The amplitude of risks and nature of Mac Malware is getting worst with its increasing number at an approximate rate of 10% by each month.</p>

						<p>eScan Anti-Virus Security for Mac is a security solution designed exclusively for Apple Macintosh machines running Mac OS X, keeping in mind the drastically increasing cyber threats and the security needs required for their defense. It provides real-time protection to PCs based on Mac platform against Viruses, Spyware, Adware, Rootkits, Botnets, Keyloggers, and other security threats.</p>

						<?php 
						$group = 'home';
						$key = 'mac';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
				    	array(
				    		'icon'			=> 'fa-apple',
				    		'title'			=> 'Powered by Innovative Technologies',
				    		'description'	=> "eScan Anti-Virus Security for Mac keeps the computer's memory and resource usage to the least, while providing comprehensive protection. It is easy-to-use and involves simple installation. It detects and warns users about the suspicious behaviour of applications, thus providing protection from Zero-Day threats. It also enables blocking of USB based Storage devices, thus preventing data theft and transmission of Viruses, Trojans or any other malware. In addition, it provides automatic as well as manual updates with extensive logs & reports.

Moreover, if a Mac is used in a mixed network environment along with the other operating systems like Windows, it can be used as a storage point for malware. Though the malware may not affect the Mac, however, it can spread via the network, either through emails, file-sharing applications or downloads via the Internet. In such scenarios too, eScan Anti-Virus Security for Mac will provide effective real-time protection."
				    		),
						array(
				    		'icon'			=> 'fa-tachometer',
				    		'title'			=> 'Trendy &amp; Easy to Use GUI',
				    		'description'	=> "With eScan Anti-Virus Security for Mac, you get a user-friendly graphical especially designed to suit the emerging technology trends. Its intuitive design is suitable for both novice and expert users."
				    		),
						array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Effective Real-time Protection',
				    		'description'	=> "eScan Anti-Virus Security for Mac monitors and provides protection on real-time basis against viruses and other security threats with its advanced and innovative technologies. It keeps your Mac-based computer safe from infections and prevents spreading of new generation malware.

It provides protection to file/folder from malware and other security threats on real time basis, whenever they are accessed or executed. eScan Anti-Virus Security for Mac also scans the files that are downloaded via Internet / transferred via the network to your Mac system."
				    		),
						array(
				    		'icon'			=> 'fa-clock-o',
				    		'title'			=> 'On-demand Scanning',
				    		'description'	=> "eScan Anti-Virus Security for Mac facilitates faster scan of your system, being very light on system resources. This ensures that your computer does not slow down, even while eScan is performing an on-demand scan of the files/directories that you access or copy onto your system. It allows you to select different files/folders in your system and scan them for viruses. You can select and scan any directory or file, your whole computer, directories in your system and running process for memory resident viruses. "
				    		),
						array(
				    		'icon'			=> 'fa-calendar',
				    		'title'			=> 'Scheduled Scanning',
				    		'description'	=> "eScan Anti-Virus Security for Mac offers you an option for scheduled scanning, which will run seamlessly in the background without interrupting your current working environment. It performs scheduled scans for selected files/folders or the entire system for the scheduled period, thus providing you the best protection against security threats."
				    		),
						array(
				    		'icon'			=> 'fa-comments',
				    		'title'			=> '24&times;7 Free Online Technical Support',
				    		'description'	=> "eScan provides 24&times;7 FREE online technical support via e-mail, live chat, and forums to all our customers by our experts round-the-clock."
				    		),
						array(
				    		'icon'			=> 'fa-crosshairs',
				    		'title'			=> 'Powerful Heuristic Scanning for Proactive Protection',
				    		'description'	=> "eScan Anti-Virus Security for Mac is powered by highly sophisticated Heuristic Algorithms, which detects unknown viruses that are continuously being released by malware writers. eScan performs scanning for files/folders and Internet downloads. It detects and warns users about the suspicious behaviour of applications, thus providing protection from Zero-Day threats."
				    		),
						array(
				    		'icon'			=> 'fa-hdd-o',
				    		'title'			=> 'Real-time USB/FireWire Control',
				    		'description'	=> "eScan Anti-Virus Security for Mac effectively provides proactive protection from virus infections via DVD-ROM/CD-ROM or USB-based portable storage devices, such as flash drives, pen drives, and portable hard disks, whenever they are mounted."
				    		),
						array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Effective Endpoint Security',
				    		'description'	=> "eScan Anti-Virus Security for Mac edition enables blocking of USB based storage devices, thus preventing data theft and transmission of Viruses, Trojans or any other malware."
				    		),
						array(
				    		'icon'			=> 'fa-refresh',
				    		'title'			=> 'Automatic and Manual Virus Updates',
				    		'description'	=> "New viruses appear everyday. Updates are vaccines that detect and remove them. eScan Anti-Virus Security for Mac checks for the latest virus definition updates at regular intervals from the Internet, thus protecting your system from the latest malware attacks. It allows download of updates either using a proxy server or via a direct Internet connection, which is configurable as per required."
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