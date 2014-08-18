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
			    <h1 class="page-header"><span>e</span>Scan Enterprise Edition <span>for</span> Linux File Servers</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/enterprise/linux-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>eScan for Linux (eScan) is a reliable virus scanning software for workstations and servers running on Linux. It offers a complete and secure Anti-Virus Security Solution that detects and removes over 1,20,000 viruses, Trojans and other threats. This page explains the key features of eScan for Linux Servers and demonstrates how it detects and removes viruses.</p>
				    
					    <?php
						$group = 'enterprise';
						$key = 'linux';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
						array(
				    		'icon'			=> 'fa-crosshairs',
				    		'title'			=> 'Monitor Options',
				    		'description'	=> "eScan for Linux Servers has a feature called the Monitor which allows you to configure settings like the cache size, number of threads (files) that can be scanned simultaneously and set the maximum size up to which files should be scanned. You can also Quarantine infected files. Other features include setting the quarantine path and excluding files with specific masks (like .pdf, .txt) from scanning. Monitor allows you to exclude specific directories from scanning."
				    		),
						array(
				    		'icon'			=> 'fa-bullhorn',
				    		'title'			=> 'eScan Status',
				    		'description'	=> "eScan for Linux Servers has a menu that gives important information such as the date of virus signatures were downloaded, the Anti-Virus engine version and the total number of viruses that can be detected and removed."
				    		),
						array(
				    		'icon'			=> 'fa-folder-open',
				    		'title'			=> 'Scanning Files and Directories',
				    		'description'	=> "eScan allows you to select different objects in your system and scan them for viruses. You can select and scan any directory or file, your whole computer, directories in your system and also running process for memory resident viruses."
				    		),
						array(
				    		'icon'			=> 'fa-rss',
				    		'title'			=> 'Network Outbreak Prevention, Live Alerts and Reports',
				    		'description'	=> "eScan automatically prevents spreading of malware infection on networks and, sends alerts to the administrator about the outbreaks on the network. It can also instantaneously display live alerts about Applications, USB / Flash device, and Site Browsing information of the clients. Administrators can view comprehensive reports on all the clients and can also export the reports to HTML and PDF formats for in-depth analysis."
				    		),
						array(
				    		'icon'			=> 'fa-cogs',
				    		'title'			=> 'Set Actions for Infected Files',
				    		'description'	=> "When infected files are detected, you can set the action to be taken. The actions that can be preset include renaming the infected file, disinfect the file and if that fails, either rename or delete the file, etc.

You can select specific file types for scanning. Different file types like packed, mail databases, archived, plain mail, self-extracting archived files, etc. can be selected."
				    		),
						array(
				    		'icon'			=> 'fa-download',
				    		'title'			=> 'Download Updates',
				    		'description'	=> "Every day sees new viruses appearing. Updates are vaccines that detect and remove new viruses. The software must have the means to identify new viruses and remove them. Updates are available as free downloads from our mirror download sites. eScan can be configured to connect automatically to these sites and download updates."
				    		),
						array(
				    		'icon'			=> 'fa-clock-o',
				    		'title'			=> 'Auto Scan Schedule',
				    		'description'	=> "You can set a schedule to automatically scan your system at a preset time. You can also set the actions that should be run when virus infected files are detected."
				    		),
						array(
				    		'icon'			=> 'fa-file-text-o',
				    		'title'			=> 'View eScan Log',
				    		'description'	=> "eScan generates a comprehensive log of scanning activity. The log shows date and time when scanning was done and path of objects scanned. You can also view the scan report. There are three log levels: 0 level logs all scanning activity, 1 level logs only infected files and scan report, 2 level logs only scan report."
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
							<li>Real-time Intelligent Monitor to guard your system.</li>
							<li>Configuration and management through a web interface.</li>
							<li>Ability to scan files automatically as they are modified and closed in real time.</li>
							<li>Quarantine the infected files.</li>
							<li>Skip scanning of files with specified extensions.</li>
							<li>Scans files in real time with the specified include directories.</li>
							<li>Command line scanner for automation and scheduling.</li>
							<li>Automatic and manual download of updates.</li>
						</ul>
					</div>
			    </div>
		    </div>
		    <!-- /Content -->
	    </div>
	</div>


</main>