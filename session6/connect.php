<?php 
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //password = '';
	$database = 'batch137_142';
	$connect = mysqli_connect($server, $username, $password, $database);

	mysqli_set_charset($connect,"utf8");
	
	// check connect
	if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
	}

?>