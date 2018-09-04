<!DOCTYPE html PUBLIC "-//W3//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>add device</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin_new.css"> 
	<?php include_once("admin_fns.php"); ?>
	<?php include_once('header.php'); ?>
	<?php include_once('bar.php'); ?>
</head>
<body class="body">
	<div id="table">	
		<br>
		<h2 id="head117">Add A New Device</h2><br>
	<?php 

	require_once 'config.php';
	$db_server = mysqli_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error());


	if(isset($_POST['devicename']) && isset($_POST['manufacturer']) && isset($_POST['seller_id']) && isset($_POST['compatibility']) && isset($_POST['price']) && isset($_POST['text']) && isset($_POST['peri_device_id']) && isset($_POST['android']) && isset($_POST['apple']) && isset($_POST['specialized']) && isset($_POST['entertainment']) && isset($_POST['communication']) && isset($_POST['everyday_tasks']) && isset($_POST['scheduling']) && isset($_POST['product_image']))
	{
		$name = $_POST['devicename'];
		$manufacturer = $_POST['manufacturer'];
		$seller_id = $_POST['seller_id'];
		$compatibility = $_POST['compatibility'];
		$price = $_POST['price'];
		$description = $_POST['text'];
		$peri_device_id = $_POST['peri_device_id'];
		$android = $_POST['android'];
		$apple = $_POST['apple'];
		$specialized = $_POST['specialized'];
		$entertainment = $_POST['entertainment'];
		$communication = $_POST['communication'];
		$everyday_tasks = $_POST['everyday_tasks'];
		$scheduling = $_POST['scheduling'];
		$product_image = $_POST['product_image'];


		//specify the directory where the file is going to be placed.
		$target_dir = "/add product_pictures or images in the correct directory of the web server/";

		//specify the path of the file to be uploaded
		$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
		$uploadOK = 1;

		//hold the file extension of the uploaded file
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

		//check the file is an image file
		if (isset($_POST['submit'])) {

			$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
			if ($check !== false) {
				echo "File is an image -" . $check['mime'].".";
				$uploadOK = 1;
			}else{
				echo "File is not an image file.";
				$uploadOK = 0;
			}
		}

		//check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, the file already exists.";
			$uploadOK = 0;
		}

		//check file size
		if ($_FILES['fileToUpload']['size'] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOK = 0;
		}

		//allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
			$uploadOK = 0;
		}

		//check if $uploadOK is set to 0 by an error
		if ($uploadOK == 0) {
			echo "Sorry, your file was not uploaded.";
		}else{
			if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
				echo "The file ". basename($_FILES['fileToUpload']['name']. "has been uploaded.");
			}else{
				echo "Sorry, there was an error uploading your file.";
			}
		}


		$query = "INSERT INTO device VALUES" . "('". mysqli_insert_id($db_server)."', '$name', '$manufacturer', '$seller_id', '$compatibility', '$price', '$description', '$peri_device_id', '$android', '$apple', '$specialized', '$entertainment', '$communication', '$everyday_tasks', '$scheduling', '$product_image')";
		
		if (!mysqli_query($db_server, $query)){
		
			echo "INSERT failed: $query<br />" . mysqli_error($db_server) . "<br /><br />";
		}else{

			header("Location: submit.php");
		}

	}else{

	//	echo "Fill in the blank form first and then submit again.";
	}
?>

	<table id="form">
		<tr>
		<td>
		<form action="add_device.php" enctype="multipart/form-data" method="post">
			<table align="center">
			<tr>
			<td  class="first">
				<label for="devicename">Device Name:</label>
			</td>
			<td class="second">
				<input type="text" name="devicename" maxlength="70" />
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
			<td  class="first">
				<label for="sellerID">Seller ID:</label>
			</td>
			<td class="second">
				<input type="text" name="seller_id" value="" size="5" />
			</td>
			</tr>


			<tr>
			<td class="first">
				<label for="price">Price:</label>
			</td>
			<td class="second">
				$<input type="text" name="price" size="5" value="" maxlength="10" />
			</td>
			</tr>
			<br/>
			<tr>
				<td class="first">
					<label for="Compatibility">Compatibility:</label>
				</td>
				<td class="second" >
					<label for="compatibility">Yes</label>
						<input type="radio" name="compatibility" value="1"  />
						 <label for="compatibility">No</label>
						<input type="radio" name="compatibility" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="devicename">Peri Device ID:</label>
			</td>
			<td class="second">
				<input type="text" name="peri_device_id" size="5" />
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
			<td  class="first">
				<label for="peri_deviceID">Peripheral Device ID:</label>
			</td>
			<td class="second">
				<input type="text" name="peri_device_id" size="5" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="product_image">Image File Upload:</label>
			</td>
			<td class="second">

				<input type="file" name="fileToUpload" value="" /></br />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="product_image">Product Image:</label>
			</td>
			<td class="second">
				<input type="text" name="product_image" maxlength="70" />
			</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="android">Android:</label>
			</td>
			<td class="second" >
					<label for="android">Yes</label>
						<input type="radio" name="android" value="1"  />
						 <label for="android">No</label>
						<input type="radio" name="android" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="apple">Apple:</label>
			</td>
			<td class="second" >
					<label for="apple">Yes</label>
						<input type="radio" name="apple" value="1"  />
						 <label for="apple">No</label>
						<input type="radio" name="apple" value="0" />
				</td>
			</tr>
			<tr>
			<td  class="first">
				<label for="specialized">Specialized:</label>
			</td>
			<td class="second" >
					<label for="specialized">Yes</label>
						<input type="radio" name="specialized" value="1"  />
						 <label for="compatibility">No</label>
						<input type="radio" name="specialized" value="0" />
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
					<input type="submit" name="submit" value="Add" id="add" /><br><br>			
				</td>
			</tr>
			</table>
		</form>
		</td>
		</tr>
	</table>
	</div>
</body>
</html>