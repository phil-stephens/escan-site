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
			    <h1 class="page-header"><span>e</span>Scan Anti-Virus <span>with</span> Cloud Security <span>for</span> SMB</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/smb/antivirus-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>IT security is common concern faced by all businesses. Looking at the current situation of the cyber security landscape, evolving threats to network security and the innumerable challenges faced by Small and Medium Businesses (SMBs) are significantly similar to large enterprises. SMBs rely on technology and networks as much as any enterprise. Though larger businesses are well equipped with substantial resources to defend against network security threats, SMBs generally cannot afford dedicated resources to handle the security of their network.</p>

						<p>eScan for Small and Medium Businesses (SMBs) with Cloud Security is a specially designed comprehensive security solution to fulfill the needs of SMBs that provides in-depth defense against evolving threats with a very low cost of ownership. The centralized web-based administration console helps the network administrator set policies on client computers to prevent malware infections and increases productivity through web access control and application control, thus help implement high levels of IT security to ensure business continuity just as enterprises.</p>
						
						<?php
						$group = 'smb';
						$key = 'antivirus';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
						array(
				    		'icon'			=> 'fa-lock',
				    		'title'			=> 'New Secure Web Interface',
				    		'description'	=> "The new Secure Web Interface uses SSL technology to encrypt all communications.
With the new Web-based eScan Management Console (EMC), network administrators can now monitor and deploy a variety of security measures, such as Anti-Malware and Anti-Spam updates, licenses, custom (un)installing and upgrading eScan, enabling or disabling of eScan modules, uninstalling other Anti-Virus software and enforce integrated security policies across the network, all using a browser."
				    		),
						array(
				    		'icon'			=> 'fa-tachometer',
				    		'title'			=> 'Summarized Dashboard for better Security Management',
				    		'description'	=> "A summarized dashboard provides administrator the status of the managed clients in graphical formats such as deployment status, protection status and protection statistics."
				    		),
						array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Endpoint Security with Device Management (Improved)',
				    		'description'	=> "Administrators can assign privileges to clients on access to the removable devices such as Webcams, CD-ROM, USB Devices as well as composite and Bluetooth devices, SD Cards, Imaging Devices, Composite Devices, etc. The device control feature assists you in monitoring devices that are connected to the system in the network. Using the password protection feature, unauthorized USB devices can be blocked. This ensures data theft prevention leaving no scope for misuse of confidential data as well as protection from malware threats through external devices."
				    		),
						array(
				    		'icon'			=> 'fa-cogs',
				    		'title'			=> 'Application Control',
				    		'description'	=> "The new improved Application control feature of eScan allows you to block, whitelist and define time restrictions for applications. The enhanced application control functionality leverages maximum control over system applications."
				    		),
						array(
				    		'icon'			=> 'fa-rss',
				    		'title'			=> 'Network Outbreak Prevention, Live Alerts and Reports',
				    		'description'	=> "eScan automatically prevents spreading of malware infection on networks and, sends alerts to the administrator about the outbreaks on the network. It can also instantaneously display live alerts about Applications, USB / Flash device, and Site Browsing information of the clients. Administrators can view comprehensive reports on all the clients and can also export the reports to HTML and PDF formats for in-depth analysis."
				    		),
						array(
				    		'icon'			=> 'fa-laptop',
				    		'title'			=> 'Asset Management',
				    		'description'	=> "eScan’s Asset Management module provides the entire hardware configuration and list of software installed/uninstalled on client computers. This helps administrators to keep track of all the hardware as well as software resources installed/uninstalled on all the client computers connected to the network."
				    		),
						array(
				    		'icon'			=> 'fa-print',
				    		'title'			=> 'Print Activity',
				    		'description'	=> "eScan comprises of Print Activity module that efficiently monitors and logs printing tasks done by all the managed computers. It provides you a detailed report in PDF, Excel or HTML formats of all printing jobs done by managed computers through any printer connected to any computer locally or to the network such as number of copies printed through any printer, the document name of the printed file, the date on which print was taken (client machine), machine name, along with the username of the computer and it’s IP address. In addition, it also gives a log report of all PDF conversions through PDF converters installed on individual machine connected to the network."
				    		),
						array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Hotfix Management',
				    		'description'	=> "Administrators can now manage Critical Hotfixes released by eScan and Microsoft to ensure that all the clients in the network are updated with the latest patches."
				    		),
						array(
				    		'icon'			=> 'fa-university',
				    		'title'			=> 'Enhanced Firewall on both the Server and the Client',
				    		'description'	=> "The two-way Firewall with predefined rule sets at the client monitors and logs all incoming and outgoing traffic, according to the policy defined for the client."
				    		),
						array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'New Faster and Intelligent On-Demand Scanner',
				    		'description'	=> "The new On-Demand Scanner with Whitelisting Technology performs faster scans on the clients and is very light on system resources. A battery mode automatically detects when the laptop / netbook is on battery and restricts resource intensive processes such as scheduled scans from starting, thereby providing unmitigated battery time."
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
					<div class="col-sm-10 col-sm-offset-1">
						<ul>
							<li>Customized Client Installation</li>
							<li>Remote connection to Clients from the eScan Management Console</li>
							<li>Cloud-based eScan Security Network ensures protection against current threats</li>
							<li>Safe Mode Password Protection</li>
							<li>File Reputation Services</li>
							<li>Real-Time Protection against Malware</li>
							<li>Sophisticated File Blocking and Folder Protection</li>
							<li>Powerful Heuristic Scanning for Proactive Protection</li>
							<li>Auto Back-up and Restore of Critical System files</li>
							<li>Export and Import eScan Management Console settings</li>
							<li>Support for SYSLOG, SNMP, NAC, NAP, and VMWARE</li>
							<li>Automatic Compressed Updates</li>
							<li>Wizard to create a Windows&reg;-based Rescue Disk to clean Rootkits and File infectors</li>
							<li>Inbuilt eScan Remote Support</li>
						</ul>
					</div>
			    </div>
		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>