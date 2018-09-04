<?php
	include_once('admin_fns.php');

	$page_title ='register';

	require_once 'config.php';
	
	$db_server = mysql_connect($db_host, $db_user, $db_password);

	if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

	mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysqli_error($db_server));


	if(isset($_POST['submitted'])){
		//handle the form

	//	require_once(MYSQL);

		$trimmed = array_map('trim', $_POST);

		$fn = $ln = $e = $p = FALSE;
		
		if(preg_match('/^[A-Z \'.-]{2,20}$/i', $trimmed['first_name'])){

			$fn = mysqli_real_escape_string($db_server, $trimmed['first_name']);
		} else{

			echo '<p class="error"> Please enter your first name!</p>';
		}

		//check for last name
		if(preg_match('/^[A-Z \'.-]{2,40}$/i', $trimmed['last_name'])){

			$ln = mysqli_real_escape_string($db_server, $trimmed['last_name']);
		} else{
			echo '<p class="error">Please enter your last name!</p>';
		}

		//check for email
		if (preg_match('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/', $trimmed['email'])) {
			
			$e = mysqli_real_escape_string($db_server, $trimmed['email']);

		}else{

			echo '<p class="error">Please enter a valide email address!</p>';
		}


		//chech for password and matching against the confirmed password
		if (preg_match('/^\w{4,20}$/', $trimmed['password1'])) {
			if ($trimmed['password1'] == $trimmed['password2']) {
				$p = mysqli_real_escape_string($db_server, $trimmed['password1']);
			}else{
				echo '<p class="error">Your password did not match the confirmed passwor!</p>';
			}
		} else {
			echo '<p class="error">Please enter a valid password!</p>';
		}

	if ($fn && $ln && $e && $p) {

		//add the user to the database
		$q = "INSERT INTO user VALUES" . "('". mysqli_insert_id($db_server)."', '$fn', '$ln', '$e', sha1('$p'))";

		    $r = mysqli_query($db_server, $q) or trigger_error("Query: $q\n<br />MySQL Error: ". mysqli_error($db_server));

		if(mysqli_affected_rows($db_server) == 1){
			//if it ran OK

			echo '<p class="error">Thank you for registration!</p>';		

			exit(); //stop the page	

		} else{
			echo '<p class="error">You could not be registered due to a system error.
			      We apologize for any inconvenience.</p>';
		}
	} else{
		
		//if one of the data tests failed
		echo '<p class="error">Please re-enter your passwors and try again.</p>';

	}
}
?>
<link rel="stylesheet" type="text/css" href="admin_new.css"> 
<p id="register">Register</p>

<form action="registration.php" method="post" id="rform">
	<fieldset>

		<p>First Name: <input type="text" name="first_name" size="20" maxlength="20" value="<?php if(isset($trimmed['first_name'])) echo $trimmed['first_name']; ?>" /></p>

		<p>Last Name: <input type="text" name="last_name" size="20" maxlength="40" value="<?php if (isset($trimmed['last_name'])) echo $trimmed['last_name'];?>" /></p>

		<p id="email">Email Address: <input type="text" name="email" size="30" maxlength="80" value="<?php if (isset($trimmed['email'])) echo $trimmed['email'];?>" /></p>
		
		<p id="rpass">Password: <input type="password" name="password1" size="20" maxlength="20" /><small><br/></p><p id="rline">Use only letters, numbers, and the underscore.<br/></p><p id="rsline">Must be between 4 and 20 characters long.</small></p>

		<p id="rconpass">Confirm Password: <input type="password" name="password2" size="20" maxlength="20" /></p>

	</fieldset><br>


	<div><input type="submit" name="submit" value="Register" />
	</div>	

	<input type="hidden" name="submitted" value="TRUE" />

</form>
<hr id="registerhr">
<?php footer(); ?>