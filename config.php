<?php

	$servername = "localhost";
	$username = "id17451772_root";
	$password = "n74D7QNSuBsZjR@";
	$dbname = "id17451772_dbw07";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>