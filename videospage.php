<?php
session_start();


	include("connection.php");
	include("function.php");
	
	$user_data = check_login($con);


?>

<!DOCTYPE html>
<html>

<head>
<title>Videos Page</title>
</head>

<body style="background-color: powderblue">
	
	<br>
	 <?php echo "Hello, "; echo $user_data['user_name']; ?>

		
	
	
	
	<h4>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<a href="login.php">logout</a>


	
</body>

</html>