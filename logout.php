<html xmlns="http:www.w3.org/1999/xhmtl" xml:lang="en" lang="en">
<head>
	<title>logout</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="admin_new.css"> 
</head>
<body class="body">

<?php

session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
//header("location:/matchmaker/index.php"); //to redirect back to "index.php" after logging out

?>
<div id="logout">

<?php
print("You are logged out.");

/* exit(); */
?>
</div>

 


<br>
<a href="admin.php" id="admin" > Click here to Admin page</a>     |      <a href="index.php" id="homepage" >Click here to Homepage</a>

</body>
</html>