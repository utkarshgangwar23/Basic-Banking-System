<?php

	$conn = mysqli_connect('localhost','id16856794_root','Anshut23#3777','id16856794_sparks_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>