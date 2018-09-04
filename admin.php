<?php
	
	session_start();
	$_SESSION['admin'] = 'login';

	include_once('admin_fns.php');

	if (($_SERVER['PHP_AUTH_USER'] != 'admin') || ($_SERVER['PHP_AUTH_PW'] != 'admin')) {
		header('WWW-Authenticate: Basic Realm="Secret Stash"');
		header('HTTP/1.1 401 Unauthorized');
		print('You must provide the proper credentials!');
		exit();
	}
?>
<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN" 
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 	<title>Administration Page</title>
 	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 	<link rel="stylesheet" type="text/css" href="admin_new.css">

</head>


<body id="bodyh">
<div>
 	<img src="logo.jpg" alt="company logo" style="width:99px;height:37px;" align="left"><br/><br/><br>
 

 	<h2 id="head">Device Management System</h2>
 	
 	<div id="menu1">
 		<ul type=square>
	 		<li><a href="manage_device.php" style="text-decoration:bold;">Manage Devices</a></li>
 			<li><a href="manage_peripheral.php" style="text-decoration:bold;">Manage Peripherals</a></li>
 			<li><a href="logout.php" style="text-decoration:bold;">Log Out </a></li>
 		</ul>
 	</div>
 	<br/>
 	<hr id="end">
 	<?php footer();?>
</div>
</body>
</hmtl> 