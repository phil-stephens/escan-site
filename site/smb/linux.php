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
			    <h1 class="page-header"><span>e</span>Scan Anti-Virus <span>for</span> Linux Desktops</h1>

			    <div class="row">
				    <div class="col-sm-4">
					    <!-- Image -->
					    <img src="/assets/img/home/linux-boxshot.png" class="img-responsive">
				    </div>

				    <div class="col-sm-8">
					    <p>The Next Generation Anti-Virus Scanning Software for Linux Systems is a reliable virus scanning software for machines running on Linux, which protects your machines from virus and other threats, thus offering you a complete and secure Anti-Virus security solution.</p>

						<p>With the increased popularity of Linux as an alternate operating system for desktops, attacks on Linux based machines has increased. About 90% of the viruses today enter the organizations via Internet and through emails. The only solution is to provide content security or, in a broader sense, on-demand software application that can be launched as and when required. eScan Anti-Virus for Linux desktops answers all the needs.</p>

						<?php
						$group = 'smb';
						$key = 'linux';
						include 'site/products/_price_widget.php' ?>
				    </div>
			    </div>

			    <hr />

			    <div class="row feature-container">
			    	<?php
				    $_features = array(
				    	array(
				    		'icon'			=> 'fa-bolt',
				    		'title'			=> 'Faster On-Demand Scanning',
				    		'description'	=> "eScan's new Faster On-Demand Scanner leads to faster scans and is also very light on system resources. It facilitates selected Directory Scan, Local hard disk and Home Directory scanning. It also facilitates Memory Scan. It consists of Command Line and Graphical User Interface (GUI) Scanner."
				    		),
				    	array(
				    		'icon'			=> 'fa-calendar',
				    		'title'			=> 'Scheduled Scanning',
				    		'description'	=> "eScan for Linux Desktop facilitates to organize the schedule to check specific directory or local hard disk. It also provides an option for the scanning on the basis like once hourly/Daily/Weekly/Monthly. It has separate settings for scheduled scanning."
				    		),
				    	array(
				    		'icon'			=> 'fa-shield',
				    		'title'			=> 'Heuristic Scanning',
				    		'description'	=> "eScan's sophisticated heuristic scan engine can detect over 1,20,000 viruses, that are being continuously released and protects the user from zero day threats."
				    		),
				    	array(
				    		'icon'			=> 'fa-laptop',
				    		'title'			=> 'Virtual Scanning',
				    		'description'	=> "The application can scan virtually all types of files including zipped and archived files, hence providing the better protection."
				    		),
				    	array(
				    		'icon'			=> 'fa-share-alt',
				    		'title'			=> 'Multiple Preset Actions for Detected Virus',
				    		'description'	=> "When viruses are detected you can run preset actions like disinfect, delete the infected file, rename it, prompt for users action, etc."
				    		),
				    	array(
				    		'icon'			=> 'fa-eye-slash',
				    		'title'			=> 'Detects Hidden Virus',
				    		'description'	=> "eScan reads inside the data stream of a file to detect hidden viruses."
				    		),
				    	array(
				    		'icon'			=> 'fa-refresh',
				    		'title'			=> 'Automatic Updates',
				    		'description'	=> "eScan has the facility of automatically downloading updates as per a schedule you can set. This protects your computer from the latest security threats."
				    		),
				    	array(
				    		'icon'			=> 'fa-bullhorn',
				    		'title'			=> 'Anti-Virus Status',
				    		'description'	=> "eScan Anti-Virus for Linux has a menu that gives important information such as the date of virus signatures were downloaded the eScan Anti-Virus engine version and the total number of virus that can be removed."
				    		),
				    	array(
				    		'icon'			=> 'fa-folder-open-o',
				    		'title'			=> 'Scanning Files and Directories',
				    		'description'	=> "eScan allows you to select different objects in your system and scan them for viruses. You can select and scan any directory or file, your whole computer, directories in your system and also running process for memory resident viruses."
				    		),
				    	array(
				    		'icon'			=> 'fa-cogs',
				    		'title'			=> 'Set Actions for Infected Files',
				    		'description'	=> "When infected files are detected, you can set the action to be taken. The actions that can be preset include renaming the infected file, quarantining it to a special directory, cleaning the file and if that fails, either rename or delete the file.

Another feature is that you can select specific file types for scanning. Different file types like packed, mail databases, archived, plain mail, self-extracting archived files."
				    		),
				    	array(
				    		'icon'			=> 'fa-clock-o',
				    		'title'			=> 'Schedule for Scanning',
				    		'description'	=> "You can set a schedule to automatically scan your system at a preset time. When virus infected files are detected, actions you have selected earlier are run."
				    		),
				    	array(
				    		'icon'			=> 'fa-file-text-o',
				    		'title'			=> 'View eScan Log',
				    		'description'	=> "eScan generates a comprehensive log of Anti-Virus activity. The log shows date and time when scanning is done, along with the path and name of objects scanned."
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