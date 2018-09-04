<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>

	<title>add peripheral device</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin_new.css">

	<?php include_once('header.php'); ?>

</head>
<body class="body">
	
	<?php 

	require_once 'config.php';
	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));


	if(isset($_POST['devicename']) && isset($_POST['manufacturer']) &&  isset($_POST['compatibility']) && isset($_POST['price']) && isset($_POST['device_id']) && isset($_POST['text']) && isset($_POST['website']) && isset($_POST['entertainment']) && isset($_POST['communication']) && isset($_POST['everyday_tasks']) && isset($_POST['scheduling']))
	{
		$name = $_POST['devicename'];
		$manufacturer = $_POST['manufacturer'];
		$compatibility = $_POST['compatibility'];
		$price = $_POST['price'];
		$device_id = $_POST['device_id'];
		$description = $_POST['text'];
		$website = $_POST['website'];
		$entertainment = $_POST['entertainment'];
		$communication = $_POST['communication'];
		$everyday_tasks = $_POST['everyday_tasks'];
		$scheduling = $_POST['scheduling'];


		$query = "INSERT INTO peripheral_device VALUES" . "('". mysqli_insert_id($db_server)."','$compatibility', '$peri_device_name', '$price', '$device_id', '$entertainment', '$communication', '$scheduling', '$everyday_tasks', '$website', '$description')";
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";

		}else{

			header("Location: submit1.php");
		}

	}else{

		echo "Fill in the blank form first and then submit again.";
	}
?>
	<br>
	<h2 id="head1">Add A New Peripheral Device</h2>

	<table style="width:70%" id="ptable">
	<tr>
	<td>
	<form action="add_peripheral.php" method="post">
		<table align="center">
		<tr>
		<td  class="first">
			<label for="devicename">Device Name:</label>
		</td>
		<td class="second">
			<input type="text" name="devicename" size="15" maxlength="70" />
		</td>
		</tr>
		<tr>
		<td class="first">
			<label for="manufacturer">Manufacturer:</label>
		</td>
		<td class="second">
			<input type="text" name="manufacturer" size="15" maxlength="70" />
		</td>
		</tr>
		<tr>
		<td class="first">
			<label for="price">Price:</label>
		</td>
		<td class="second">
			$<input type="text" name="price" size="14" maxlength="10" />
		</td>
		</tr>
		<br/>
	<tr>
		<td class="first">
			<label for="device_id">Device ID:</label>
		</td>
		<td class="second">
			<input type="text" name="device_id" size="14" maxlength="10" />
		</td>
		</tr>
		<tr>
			<td class="first">
				<label for="Compatibility">Compatibility:</label>
			</td>
			<td class="second" >
				<label for="compatibility">Yes</label>
					<input type="radio" name="compatibility" value="1" checked="checked">
					 <label for="compatibility">No</label>
					<input type="radio" name="compatibility" value="0">
			</td>
		</tr>	
		<tr>
			<td class="first">
				<label for="text"> Device Description:</label>
			</td>
			<td class="second">
				<textarea name="text" rows="3" cols="50">
				</textarea>
			</td>
		</tr>
				<tr>
		<td class="first">
			<label for="website">Website:</label>
		</td>
		<td class="second">
			<input type="text" name="website" size="30" maxlength="70" />
		</td>
		</tr>
		<tr>
			<td  class="first">
				<label for="entertainment">Entertainment:</label>
			</td>
			<td class="second" >
					<label for="entertainment">Yes</label>
						<input type="radio" name="entertainment" value="1"  />
						 <label for="entertainment">No</label>
						<input type="radio" name="entertainment" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="communication">Communication:</label>
			</td>
			<td class="second" >
					<label for="communication">Yes</label>
						<input type="radio" name="communication" value="1"  />
						 <label for="communication">No</label>
						<input type="radio" name="communication" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="everydaytask">Everyday Tasks:</label>
			</td>
			<td class="second" >
					<label for="everyday_tasks">Yes</label>
						<input type="radio" name="everyday_tasks" value="1"  />
						 <label for="everyday_tasks">No</label>
						<input type="radio" name="everyday_tasks" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="schedule">Scheduling:</label>
			</td>
			<td class="second" >
					<label for="scheduling">Yes</label>
						<input type="radio" name="scheduling" value="1"  />
						 <label for="scheduling">No</label>
						<input type="radio" name="scheduling" value="0" />
				</td>
			</tr>	
		<tr>
			<td>
			</td>
			<td class="third">
				<input type="reset" name="reset" value="Reset" id="reset" />
				<input type="submit" name="submit" value="Add" id="add" /><br><br><br>
			</td>
		</tr>
		</table>
	</form>
	</td>
	</tr>
	</table>
	
	<?php
		include_once('footer.php');
	?>
</body>
</html>