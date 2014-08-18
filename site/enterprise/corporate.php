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
			    <h1 class="page-header"><span>e</span>Scan Corporate Edition <span>with</span> Cloud Security</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/enterprise/corporate-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>To ensure complete security of the IT infrastructure against the increasing number of vulnerabilities, businesses need effective security solution that not only efficiently secures but also helps manage the protection of the server and endpoints.</p>

						<p>eScan Corporate Edition with Cloud Security is a comprehensive Anti-Virus and Information Security Solution effectively provides Zero-Day Protection to both servers and endpoints. eScan Management Console (EMC) includes a Secure Web Interface that facilitates dynamic security management of the server and endpoints in the corporate network.</p>

						<?php
						$group = 'enterprise';
						$key = 'corporate';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
						array(
				    		'icon'			=> 'fa-lock',
				    		'title'			=> 'New Secure Web Interface with Summarized Dashboard',
				    		'description'	=> "The new Secure Web Interface uses SSL technology to encrypt all communications.

A summarized dashboard provides administrator the status of the managed clients in graphical formats such as deployment status, protection status and protection statistics."
				    		),
						array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Endpoint Security with Device Management & Application Control (Improved)',
				    		'description'	=> "Administrators can assign privileges to clients on access to the removable devices such as Webcams, CD-ROM, USB Devices as well as composite and Bluetooth devices, SD Cards, Imaging Devices, Composite Devices, etc. The device control feature assists you in monitoring devices that are connected to the system in the network. Using the password protection feature, unauthorized USB devices can be blocked. This ensures data theft prevention leaving no scope for misuse of confidential data as well as protection from malware threats through external devices. Moreover, the new improved Application control feature of eScan allows you to block, whitelist and define time restrictions for applications."
				    		),
						array(
				    		'icon'			=> 'fa-laptop',
				    		'title'			=> 'Asset Management',
				    		'description'	=> "eScan’s Asset Management module provides the entire hardware configuration and list of software installed/uninstalled on client computers. This helps administrators to keep track of all the hardware as well as software resources installed/uninstalled on all the client computers connected to the network."
				    		),
						array(
				    		'icon'			=> 'fa-rss',
				    		'title'			=> 'Network Outbreak Prevention, Live Alerts and Reports',
				    		'description'	=> "eScan automatically prevents spreading of malware infection on networks and, sends alerts to the administrator about the outbreaks on the network. It can also instantaneously display live alerts about Applications, USB / Flash device, and Site Browsing information of the clients. Administrators can view comprehensive reports on all the clients and can also export the reports to HTML and PDF formats for in-depth analysis."
				    		),
						array(
				    		'icon'			=> 'fa-print',
				    		'title'			=> 'Print Activity (New)',
				    		'description'	=> "eScan comprises of Print Activity module that efficiently monitors and logs printing tasks done by all the managed computers. It provides you a detailed report in PDF, Excel or HTML formats of all printing jobs done by managed computers through any printer connected to any computer locally or to the network such as number of copies printed through any printer, the document name of the printed file, the date on which print was taken (client machine), machine name, along with the username of the computer and it’s IP address."
				    		),
						array(
				    		'icon'			=> 'fa-university',
				    		'title'			=> 'Enhanced Firewall on both the Server and the Client',
				    		'description'	=> "The two-way Firewall with predefined rule sets at the client monitors and logs all incoming and outgoing traffic, according to the policy defined for the client."
				    		),
						array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Hotfix Management',
				    		'description'	=> "Administrators can now manage Critical Hotfixes released by eScan and Microsoft to ensure that all the clients in the network are updated with the latest patches."
				    		),
						array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'The New Faster and Intelligent On-Demand Scanner',
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