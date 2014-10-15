<?php
	
	if (empty($connect)) {
    	require "connect.php";
	}

	$db = "sambhav";

	if (!mysql_select_db($db)) {
	
	    echo("creating database 'sambhav'!<br/>");
	    mysql_query('CREATE DATABASE '. $db);
	
	} else {
		echo("'sambhav' database already exists!<br/>");
	}

	$selectingDatabase = true;
	$connect->selectDB();

?>