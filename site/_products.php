<?php

$_products = array(
	'home'	=> array(
		'total'	=> array(
			'name'	=> 'eScan Total Security with Cloud Security',
			'link'	=> '/home/total',
			'pid'	=> '1',
			'img'	=> '/assets/img/home/total-boxshot-sm.png',
			'description'	=> 'eScan Total Security Suite with Cloud Security for Home and Small Office Edition is a specially designed security solution that provides real-time protection to computers from objectionable content and cyber threats, such as Viruses, Spyware, Adware, Keyloggers, Rootkits, Botnets, Hackers, Spam, and Phishing. With its advanced & futuristic technologies, such as MWL* Technology, DIRC** Technology, NILP*** Technology, eScan Security Network, Advanced Virus Control and sophisticated heuristics algorithms, eScan protects your personal information and ensures safe computing environment to your family when browsing the internet, shopping online, performing online transactions, or social networking.',
			'protectee'		=> 'computer',
			'base_price'	=> 32.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'antivirus'	=> array(
			'name'	=> 'eScan Anti-Virus with Cloud Security',
			'link'	=> '/home/antivirus',
			'pid'	=> '2',
			'img'	=> '/assets/img/home/antivirus-boxshot-sm.png',
			'description'	=> 'eScan Anti-Virus with Cloud Security for Home and Small Office Edition is a specially designed security solution that provides real-time protection to computers from objectionable content and security threats, such as Viruses, Spyware, Adware, Keyloggers, Rootkits, Botnets, Hackers, Spam, and Phishing.',
			'protectee'		=> 'computer',
			'base_price'	=> 19.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'internet'	=> array(
			'name'	=> 'eScan Internet Security with Cloud Security',
			'link'	=> '/home/internet',
			'pid'	=> '3',
			'img'	=> '/assets/img/home/internet-boxshot-sm.png',
			'description'	=> 'eScan Internet Security Suite with Cloud Security for Home and Small Office Edition is a specially designed security solution protects your personal information and ensures safe computing environment to your family when browsing the internet, shopping online, performing online transactions, or social networking.',
			'protectee'		=> 'computer',
			'base_price'	=> 26.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'linux'	=> array(
			'name'	=> 'eScan Anti-Virus for Linux Desktops',
			'link'	=> '/home/linux',
			'pid'	=> '4',
			'img'	=> '/assets/img/home/linux-boxshot-sm.png',
			'description'	=> 'eScan Anti-Virus for Linux Desktops is a reliable virus scanning software for machines running on Linux, which protects your machines from virus and other threats, thus offering you a complete and secure Anti-Virus security solution.',
			'protectee'		=> 'computer',
			'base_price'	=> 13.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'mac'	=> array(
			'name'	=> 'eScan Anti-Virus Security for Mac',
			'link'	=> '/home/mac',
			'pid'	=> '5',
			'img'	=> '/assets/img/home/mac-boxshot-sm.png',
			'description'	=> 'eScan Anti-Virus Security for Mac is a security solution designed exclusively for Apple Macintosh machines running Mac OS X, keeping in mind the drastically increasing cyber threats and the security needs required for their defense. It provides real-time protection to PCs based on Mac platform against Viruses, Spyware, Adware, Rootkits, Botnets, Keyloggers, and other security threats.',
			'protectee'		=> 'computer',
			'base_price'	=> 19.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'mobile'	=> array(
			'name'	=> 'eScan Mobile Security for Android',
			'link'	=> '/home/mobile',
			'pid'	=> '6',
			'img'	=> '/assets/img/home/mobile-boxshot-sm.png',
			'description'	=> 'From a basic device used for communicating through calls and text messages, mobile phones have evolved into mini-computers. Today, mobile devices are useful in almost all aspects of our lifestyle - be it work, entertainment, social networking, banking or shopping. When connected to the internet, these android-based mobiles devices are as vulnerable to malware threats as computers, which can not only affect the operating system and applications of android devices, but the confidential data stored in these devices is also at risk. Hence, to ensure security from android malware, eScan introduces a specially designed security solution, eScan Mobile and Tablet Security for Android.',
			'protectee'		=> 'computer',
			'base_price'	=> 13.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'tablet'	=> array(
			'name'	=> 'eScan Tablet Security for Android',
			'link'	=> '/home/tablet',
			'pid'	=> '6',
			'img'	=> '/assets/img/home/tablet-boxshot-sm.png',
			'description'	=> 'eScan Tablet Security for Android is specially designed security solution for Android-based tablet devices that helps you secure your device and confidential data stored in it against viruses, malware, Trojans, and other evolving cyber security threats.',
			'protectee'		=> 'computer',
			'base_price'	=> 13.99,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),

		),
	'smb'	=> array(
		'antivirus' => array(
			'name'	=> 'eScan Anti-Virus with Cloud Security for SMB',
			'link'	=> '/smb/antivirus',
			'pid'	=> '7',
			'img'	=> '/assets/img/smb/antivirus-boxshot-sm.png',
			'description'	=> 'eScan for Small and Medium Businesses (SMBs) with Cloud Security is a specially designed comprehensive security solution to fulfill the needs of SMBs that provides in-depth defense against evolving threats with a very low cost of ownership. The centralized web-based administration console helps the network administrator set policies on client computers to prevent malware infections and increases productivity through web access control and application control, thus help implement high levels of IT security to ensure business continuity just as enterprises.',
			'protectee'		=> 'user',
			'base_price'	=> 69.96,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'internet' => array(
			'name'	=> 'eScan Internet Security with Cloud Security for SMB',
			'link'	=> '/smb/internet',
			'pid'	=> '8',
			'img'	=> '/assets/img/smb/internet-boxshot-sm.png',
			'description'	=> 'eScan for Small and Medium Businesses (SMBs) with Cloud Security is a specially designed comprehensive security solution to fulfill the needs of SMBs that provides in-depth defense against evolving threats with a very low cost of ownership. The centralized web-based administration console helps the network administrator set policies on client computers to prevent malware infections and increases productivity through web access control and application control, thus help implement high levels of IT security to ensure business continuity just as enterprises.',
			'protectee'		=> 'user',
			'base_price'	=> 109.95,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'linux' => array(
			'name'	=> 'eScan Anti-Virus for Linux Desktops',
			'link'	=> '/smb/linux',
			'pid'	=> '9',
			'img'	=> '/assets/img/smb/linux-boxshot-sm.png',
			'description'	=> 'eScan Anti-Virus for Linux Desktops is a reliable virus scanning software for machines running on Linux, which protects your machines from virus and other threats, thus offering you a complete and secure Anti-Virus security solution.',
			'protectee'		=> 'user',
			'base_price'	=> 119.96,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			)

		),
	'enterprise'	=> array(
		'corporate' => array(
			'name'	=> 'eScan Corporate Edition with Cloud Security',
			'link'	=> '/enterprise/corporate',
			'pid'	=> '10',
			'img'	=> '/assets/img/enterprise/corporate-boxshot-sm.png',
			'description'	=> 'eScan Corporate Edition with Cloud Security is a comprehensive Anti-Virus and Information Security Solution effectively provides Zero-Day Protection to both servers and endpoints. eScan Management Console (EMC) includes a Secure Web Interface that facilitates dynamic security management of the server and endpoints in the corporate network.',
			'protectee'		=> 'user',
			'base_price'	=> 119.96,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'enterprise' => array(
			'name'	=> 'eScan Enterprise Edition with Cloud Security',
			'link'	=> '/enterprise/enterprise',
			'pid'	=> '11',
			'img'	=> '/assets/img/enterprise/enterprise-boxshot-sm.png',
			'description'	=> 'eScan Enterprise Edition with Cloud Security is a comprehensive Anti-Virus and Information Security Solution effectively provides Zero-Day Protection to both servers and endpoints. eScan Management Console (EMC) includes a Secure Web Interface that facilitates dynamic security management of the server and endpoints in the corporate network.',
			'protectee'		=> 'user',
			'base_price'	=> 259.77,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			),
		'linux' => array(
			'name'	=> 'eScan for Linux File Servers',
			'link'	=> '/enterprise/linux',
			'pid'	=> '12',
			'img'	=> '/assets/img/enterprise/linux-boxshot-sm.png',
			'description'	=> 'eScan for Linux (eScan) is a reliable virus scanning software for workstations and servers running on Linux. It offers a complete and secure Anti-Virus Security Solution that detects and removes over 1,20,000 viruses, Trojans and other threats. This page explains the key features of eScan for Linux Servers and demonstrates how it detects and removes viruses.',
			'protectee'		=> 'user',
			'base_price'	=> 204.93,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			)

		),
	'mailscan'	=> array(
		'mailscan' => array(
			'name'	=> 'Mailscan for Mail Servers',
			'link'	=> '/mailscan',
			'pid'	=> '13',
			'img'	=> '/assets/img/mailscan/mailscan-boxshot-sm.png',
			'description'	=> 'MailScan is the advanced Real-time AntiVirus and AntiSpam solution for Mail Servers. MailScan protects organizations network against Virus, Worm, Trojan and many other information security threats. Employing an array of intelligent filters, MailScan offers powerful protection against Spam and Phishing mails along with comprehensive content security.',
			'protectee'		=> 'user',
			'base_price'	=> 44.94,
			'mod_u'	=> array(
							1 => 1,
							3 => 1.5,
							5 => 2
							),
			'mod_y'	=> array(
							1 => 1,
							2 => 1.6,
							3 => 2.1
							),
			)

		)			

			
);
?>