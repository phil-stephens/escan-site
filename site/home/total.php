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
			    <h1 class="page-header"><span>e</span>Scan Total Security Suite <span>with</span> Cloud Security</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/home/total-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>eScan Total Security Suite with Cloud Security for Home and Small Office Edition is a specially designed security solution that provides real-time protection to computers from objectionable content and cyber threats, such as Viruses, Spyware, Adware, Keyloggers, Rootkits, Botnets, Hackers, Spam, and Phishing.</p>

						<p>With its advanced &amp; futuristic technologies, such as MWL* Technology, DIRC** Technology, NILP*** Technology, eScan Security Network, Advanced Virus Control and sophisticated heuristics algorithms, eScan protects your personal information and ensures safe computing environment to your family when browsing the internet, shopping online, performing online transactions, or social networking.</p>

						<?php
						$group = 'home';
						$key = 'total';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
				    <?php
				    $_features = array(
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
				    		'icon'			=> 'fa-clock-o',
				    		'title'			=> 'Real-time Protection',
				    		'description'	=> "eScan protects you from advanced blended threats by integrating both its Advanced Virus Control technology and Real-time protection, thus allowing you to enjoy your digital life."
				    		),
				    	array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Faster On-Demand Scanning',
				    		'description'	=> "eScan's enhanced On-Demand Scanner comprises of smart Whitelisting Technology that leads to faster scan of files, folders, memory, registry, services and all storage devices. Being light on the system resources, it ensures that the performance of your computer is not affected even while eScan is performing thorough system scans. It can run in conjunction with eScan Security Network cloud services, hence providing maximum protection from unknown threats."
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
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Effective Endpoint Security',
				    		'description'	=> "eScan effectively prevents data thefts and Virus infections via USB or Firewire-based portable storage device, such as Flash Drives/Pen Drives, SD Card, Imaging devices, Webcam and Portable Hard Disks, thus securing your system &amp; network from evolving cyber threats.

				    		It also includes an advanced Application Control feature that allows you to block or permit applications on the local computer, thus safeguarding you from critical threats. eScan's Application Control also includes Whitelist module that allows execution of only selected applications, while restricting the execution of rest."
				    		),
				    	array(
				    		'icon'			=> 'fa-university',
				    		'title'			=> 'Advanced Two-Way Firewall',
				    		'description'	=> "It filters incoming and outgoing network activities on the computer and protects it from all types of network-based attacks. It also includes a set of predefined access control rules that the user can customize to filter network traffic."
				    		),
				    	array(
				    		'icon'			=> 'fa-trash-o',
				    		'title'			=> 'Secure Delete',
				    		'description'	=> "eScan 14 includes a set of predefined access control rules that you can customize as per your requirements. Firewall that has been enhanced for seamless integration with your operating system. In addition, it includes the Network Traffic Monitor that monitors incoming and outgoing network traffic. it also provides users with the option to block the execution of network-based executable files, thus preventing the spread of infections within networks."
				    		),
				    	array(
				    		'icon'			=> 'fa-user',
				    		'title'			=> 'Identity Protection',
				    		'description'	=> "This module can protect sensitive personal information, such as credit card numbers, mobile numbers or passwords for online services. Upon detecting any attempt to send protected information to the Internet, whether to a web page, by email or through an instant message, the transmission can be blocked automatically. This feature can only protect information that you have defined."
				    		),
				    	array(
				    		'icon'			=> 'fa-medkit',
				    		'title'			=> 'USB Vaccination',
				    		'description'	=> "This is a ‘vaccine' provided for removable USB devices, preventing USB devices from becoming a source of infection."
				    		),
				    	array(
				    		'icon'			=> 'fa-check',
				    		'title'			=> 'eScan Web Safe',
				    		'description'	=> "eScan Web Safe helps you identify websites you can trust for safe surfing, shopping based on millions of users experiences, so you can enjoy your digital life experience. These ratings are powered by users all around the world who have rated millions of websites on their experience."
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
				    		'icon'			=> 'fa-eye-slash',
				    		'title'			=> 'Registry Cleaner',
				    		'description'	=> "It is a utility designed and developed for Microsoft Operating System, whose primary function is to search for redundant items from Windows registry and clean them. Due to massive size and complexity of registry database it is practically impossible to search and clean redundant and invalid entries in windows registry. And for a novice user it could be a night mare."
				    		),
				    	array(
				    		'icon'			=> 'fa-search',
				    		'title'			=> 'Vulnerability Scanner',
				    		'description'	=> "Vulnerability scanning seeks out security flaws based on a database of known flaws, testing systems for the occurrence of these flaws and generating a report of the findings that an individual can use to tighten the system security. Check the vulnerability of the softwares installed on your computer for any kind of weakness that can be used by the attacker to gain access to the information stored on your computer without your permission. Using the options present in Vulnerability Scanner module of eScan, you can easily update the listed softwares with the more secured version of the same. Using the options present in Vulnerability Scanner module of eScan, you can easily find and update the listed softwares with the more secured version of the same."
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