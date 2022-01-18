<?php
	$con = new mysqli('localhost', 'root', '', 'kasi2u');

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
	
?>