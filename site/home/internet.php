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
			    <h1 class="page-header"><span>e</span>Scan Internet Security Suite <span>with</span> Cloud Security</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/home/internet-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>eScan Internet Security Suite with Cloud Security for Home and Small Office Edition is a specially designed security solution that protects your personal information and ensures safe computing environment to your family when browsing the internet, shopping online, performing online transactions, or social networking.</p>

						<?php
						$group = 'home';
						$key = 'internet';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
				    	array(
				    		'icon'			=> 'fa-tachometer',
				    		'title'			=> 'Stylish, User-friendly & Trendy GUI',
				    		'description'	=> 'eScan Anti-Virus with Cloud Security is optimized to increase performance and ease of use – including launching application and accessing other useful modules. It comes with a stylish and trendy Graphical User Interface that is neatly designed to suit the needs of both, novice and expert users.'
				    		),
				    	array(
				    		'icon'			=> 'fa-cloud',
				    		'title'			=> 'eScan Security Network (Cloud Technology – detects new and unknown threats)',
				    		'description'	=> "eScan's cloud based Security Network collects information from millions of eScan users around the world when they are online, to safeguard your digital world from latest and unknown threats. It provides fast response to the latest virus threats without waiting for daily or traditional virus signature updates."
				    		),
				    	array(
				    		'icon'			=> 'fa-bug',
				    		'title'			=> 'Advanced Virus Control (Smart Proactive Protection)',
				    		'description'	=> "With new Advance Virus Control technology and highly sophisticated Heuristics Algorithms, eScan effectively scans and detects unknown malware that are continuously released by malware writers. It also detects and warns users about applications that behave in a suspicious manner, thus providing protection from Zero-Day threats. eScan allows you to block files from being accessed either locally or via the network. This further prevents network-based viruses from infecting all the connected computers."
				    		),
				    	array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Faster On-Demand Scanning',
				    		'description'	=> "eScan's enhanced On-Demand Scanner comprises of smart Whitelisting Technology that leads to faster scan of files, folders, memory, registry, services and all storage devices. Being light on the system resources, it ensures that the performance of your computer is not affected even while eScan is performing thorough system scans. It can run in conjunction with eScan Security Network cloud services, hence providing maximum protection from unknown threats."
				    		),
				    	array(
				    		'icon'			=> 'fa-clock-o',
				    		'title'			=> 'Real-time Protection',
				    		'description'	=> "eScan protects you from advanced blended threats by integrating both its Advanced Virus Control technology and Real-time protection, thus allowing you to enjoy your digital life."
				    		),
				    	array(
				    		'icon'			=> 'fa-file-text',
				    		'title'			=> 'File &amp; Folder Protection',
				    		'description'	=> "Users can secure specific files and folders from being created, modified, or even deleted by malware. It also protects specific files and folders against network-based attacks, thus mitigating threats such as Sality, Virut and other file infectors."
				    		),
				    	array(
				    		'icon'			=> 'fa-history',
				    		'title'			=> 'Effective Auto Back Up and Restore',
				    		'description'	=> "eScan features an Auto Back Up and Restore feature that allows you to take a backup of all the system files that are frequently used and stores them in an encrypted form. The feature automatically restores the clean files when eScan finds an infection in any of the system files."
				    		),
				    	array(
				    		'icon'			=> 'fa-ban',
				    		'title'			=> 'Advanced Anti-Spam',
				    		'description'	=> "eScan comprises of NILP*** Technology and sophisticated filters that work on the basis of specific keywords and phrases. With its artificial intelligence, NILP technology learns the behaviour pattern of the user and accordingly classifies e-mails as Ham (E-mails received by user) or Spam (E-mails quarantined for user)."
				    		),
				    	array(
				    		'icon'			=> 'fa-child',
				    		'title'			=> 'Advanced Parental Control',
				    		'description'	=> "Researchers show that children and teenagers are one of the major targets of cyber criminals. eScan ensures safe computing environment to your family with its Advanced Parental Control feature. It allows comprehensive control over your child's online activity including social networking activities and provides more accurate filtering of web sites, with different profiles, that help in blocking inappropriate content. It also includes a Secure Virtual keyboard that secures your online transactions."
				    		),
				    	array(
				    		'icon'			=> 'fa-medkit',
				    		'title'			=> 'Effective Endpoint Security with USB Vaccination',
				    		'description'	=> "eScan effectively prevents data thefts and Virus infections via USB or Firewire-based portable storage device, such as Flash Drives/Pen Drives, SD Card, Imaging devices, Webcam and Portable Hard Disks, thus securing your network from evolving cyber security threats.

eScan Internet Security Suite with Cloud Security also includes an advanced Application Control feature that allows you to block or permit applications on the local computer, thus safeguarding you from critical threats. It also includes Whitelist module that allows execution of only selected applications, while restricting the execution of rest.

With its USB Vaccination feature, eScan plays role of a 'vaccine' that is provided for removable USB devices. It prevents your USB devices from becoming a source of infection."
				    		),
				    	array(
				    		'icon'			=> 'fa-trash-o',
				    		'title'			=> 'Secure Delete',
				    		'description'	=> "With eScan Secure Delete, the user can now permanently delete files and folders without the fear of having them retrieved through the use of third-party applications, thus preventing misuse of personal information."
				    		),
				    	array(
				    		'icon'			=> 'fa-university',
				    		'title'			=> 'Advanced Two-Way Firewall',
				    		'description'	=> "It filters incoming and outgoing network activities on the computer and protects it from all types of network-based attacks. It also includes a set of predefined access control rules that the user can customize to filter network traffic."
				    		),
				    	array(
				    		'icon'			=> 'fa-lock',
				    		'title'			=> 'Safe Mode Password Protection',
				    		'description'	=> "It helps administrators by defining safe mode boot protection using eScan password for Safe mode. Once the protection is enabled, the user will not be allowed to boot into safe mode without entering a valid password."
				    		),
				    	array(
				    		'icon'			=> 'fa-windows',
				    		'title'			=> 'Automatic Downloads of Critical Windows&reg; OS Patches',
				    		'description'	=> "eScan automatically checks and downloads critical patches for the Windows&reg; operating system from the Microsoft&reg; Web site, thus preventing malware from exploiting vulnerabilities existing in the operating system."
				    		),
				    	array(
				    		'icon'			=> 'fa-life-ring',
				    		'title'			=> 'eScan Rescue Mode',
				    		'description'	=> "It is an advanced feature which allows user to boot into a secure environment during system startup without using any optical media. It uses Windows&reg;-based environment that not only helps you to scan and clean the system but also allows you to fix registry changes made by viruses and rootkits."
				    		),
				    	array(
				    		'icon'			=> 'fa-globe',
				    		'title'			=> 'Efficient Remote Support',
				    		'description'	=> "Remote Support enables eScan Support Technicians to access the customer's computer remotely for troubleshooting and product assistance. This helps in providing faster and better support to eScan customers worldwide."
				    		),
				    	array(
				    		'icon'			=> 'fa-gamepad',
				    		'title'			=> 'Uninterrupted Gaming Experience',
				    		'description'	=> "eScan's advanced Game Detection feature automatically detects the start of a game, movies and presentations when run in full screen and prevents all notifications and alerts from being displayed, thus ensuring you an uninterrupted gaming experience."
				    		),
				    	array(
				    		'icon'			=> 'fa-comments',
				    		'title'			=> 'Round-the-Clock Expert Support',
				    		'description'	=> "24&times;7 FREE Online Technical Support (via e-mail, Live Chat, and Forums) is provided round the clock to all our customers."
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