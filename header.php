<?php 
 
 	require_once("config.php");
 
 ?>
 <!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN" 
 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 	<title><?php echo $config_sitename;?></title>
 	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 	<link rel="stylesheet" type="text/css" href="admin_new.css">
 </head>
 <body>
	 <div id="header">
	 	<h1><?php echo $config_sitename;?></h1>
	 </div>

	 <div id="menu">
 		<a href="admin.php" style="text-decoration:none;">Home</a> &bull;
 		<a href="manage_device.php" style="text-decoration:none;">Device</a> &bull;
 		<a href="manage_peripheral.php" style="text-decoration:none;">Peripheral</a> &bull;
 		<a href="logout.php" style="text-decoration:none;">Log Out</a>
 	</div>

	<div id="container">
 		<div id="bar">
 			<?php require_once('bar.php'); ?>
 		</div>
 		
 	</div>

 	<div id="main">