<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 	<title>Administration Page</title>
 	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 	<link rel="stylesheet" type="text/css" href="admin_new.css">

</head>

<div id="manage_device">

<div>
	<h1 id="head17">Manage Device</h1>
<?php
 
include_once('header.php');
require_once 'config.php';
	
$db_server = mysqli_connect($db_host, $db_user, $db_password);

if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));

if (isset($_POST['delete']) && isset($_POST['device_id']))
	{
		$device_id = $_POST['device_id'];
		
		$query = "DELETE FROM device WHERE device_id='$device_id'";
		
		if (!mysqli_query($db_server, $query))
		{
			echo "DELETE failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";

		} else{

			echo "You have deleted device: <strong>" .$_POST['device_name']. "</strong>";
		}
	}
?>

<div id="innertable">
<ul type="square">
<?php 
	$query = "SELECT * FROM device";
	
	$result = mysqli_query($db_server, $query);
	
	if (!$result) die ("Database access failed: " . mysqli_error($db_server));
	
	$rows = mysqli_num_rows($result);
	
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = mysqli_fetch_row($result);
?>
	<li>
		ID:   <?php echo "<b>".$row[0]."</b>"; ?><br>
		Name:    <?php echo "<b>".$row[1]."</b>"; ?><br>
		Manufacturer: <?php echo "<b>".$row[2]."</b>"; ?><br>
		Seller ID:     <?php echo "<b>".$row[3]."</b>"; ?><br>
		Compatibility:     <?php echo "<b>".$row[4]."</b>"; ?><br>
		Price:  $<?php echo "<b>".$row[5]."</b>"; ?><br>
		Description: <?php echo "<b>".$row[6]."</b>"; ?><br>
		Peripheral ID:     <?php echo "<b>".$row[7]."</b>"; ?><br>
		Android:     <?php echo "<b>".$row[8]."</b>"; ?><br>
		Apple:     <?php echo "<b>".$row[9]."</b>"; ?><br>
		Specialized:     <?php echo "<b>".$row[10]."</b>"; ?><br>
		Entertainment:     <?php echo "<b>".$row[11]."</b>"; ?><br>
		Communication:     <?php echo "<b>".$row[12]."</b>"; ?><br>
		Everyday tasks:     <?php echo "<b>".$row[13]."</b>"; ?><br>
		Scheduling:     <?php echo "<b>".$row[14]."</b>"; ?><br>
		Product Image:     <?php echo "<b>".$row[15]."</b>"; ?><br><br>

	</li>				
	<form action="manage_device.php" method="post">
		<input type="hidden" name="device_name" value="<?php echo $row[1]; ?>">
		<input type="hidden" name="delete" value="yes" />
		<input type="hidden" name="device_id" value="<?php echo $row[0]; ?>" />
		<input type="submit" value="Delete Device" id="delete" /><br>
	</form>
	<hr id="line">
<?php 
	}  //endforeach; 
	mysqli_free_result($result);
?>
	</ul>
</div>
	<p><a href="admin.php">Return to Administration Page</a></p>
</div>