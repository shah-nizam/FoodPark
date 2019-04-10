<?php

	// For localhost
	//$dbServer = "localhost";

	// For Alicloud
	$dbServer = "localhost";

	$dbUserName = "root";

	// For localhost
	$dbPassword = "";

	// For Alicloud
	//$dbPassword = "foobar123!";

	$dbName = "foodfinderapp";

	$googleKey = 'AIzaSyDAZ_xUtQbjc0-ua1GUYaYM8ZJ8wWF6CFo';
	$datamallKey = 'sNFhxLj1Ql6b0kC1fG7PMA==';

	$conn = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);
