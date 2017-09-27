<?php
	$host = '127.0.0.1';
	$user = 'username';
	$password = 'password';
	$database = 'hotspot';
	
 	$con = mysqli_connect("$host","$user","$password","$database");
 	// Check connection
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
  	// Change database to "creds"
	mysqli_select_db($con,"hotspot");


?>