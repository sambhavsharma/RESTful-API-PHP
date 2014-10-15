<?php
	
	require 'mysql.php';

	$username = "{username}";
	$password = "{password}";
	$hostname = "localhost"; 
	$db = "sambhav";

	$connect = new MySQL($hostname, $username, $password, $db);

?>
