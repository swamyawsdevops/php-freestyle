<?php
	session_start();

	// Define database
	define('dbhost', 'home.ctkluoj8csse.eu-west-1.rds.amazonaws.com');
	define('dbuser', 'home');
	define('dbpass', 'home1234');
	define('dbname', 'rent');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
