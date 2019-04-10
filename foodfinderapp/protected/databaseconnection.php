<?php

	// For localhost
	//$dbServer = "localhost";

	// For Alicloud
	$dbServer = "localhost";

	$dbUserName = "root";

	// For localhost
	$dbPassword = "";

	$dbName = "foodfinderapp";

  # Add your google key and datamall key
	$googleKey = '';
	$datamallKey = '';

	$conn = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);
