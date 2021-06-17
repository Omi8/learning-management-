<?php
session_start();


	include("connection.php");
	include("function.php");
	
	$user_data = check_login($con);


?>

<!DOCTYPE html>
<html>

<head>
<title>English learning website</title>
</head>

<body style="background-color: powderblue">
	
		<h1 style="font-size: 50px; text-align: center;"><b>English Learning Website</b></h2>
		<br>
		<br>
		<h2 style="font-size: 30px">Welcome to the English Learning Website</h2>


	<a href="login.php">Click here to login</a>


	<br>
	 <?php echo "Hello, "; echo $user_data['user_name']; ?>

</body>

</html>