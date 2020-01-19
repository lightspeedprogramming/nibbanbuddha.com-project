<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "nibbanbuddhaproject";

	// Create Connection

	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check Connectin 
	if (!$conn) {
		die('Connection Failed : ' . mysqli_connect_error());
	}
	echo "Connection Successfull";

?>