<?php
	
	if (empty($selectingDatabase)) {
    	require "db_connection.php";
	}

	$result = mysql_query("SHOW TABLES LIKE 'user'");
	$tableExists = mysql_num_rows($result);

	if($tableExists > 0) {
		echo "'user' table already exists!<br/>";
	
	} else {

		mysql_query(
			'CREATE TABLE user ( id int(11) NOT NULL auto_increment, 
				username varchar(20) NOT NULL,
				password varchar(40) NOT NULL,
				PRIMARY KEY (id),
				UNIQUE KEY username (username)
			)'
		);

		echo "<br/>User table created!<br/>Inserting admin user now!";

		$username = "admin";
		$password = "password";

		$password = sha1($password);

		mysql_query(
			"INSERT INTO user (username, password) VALUES ( '" . $username . "', '" . $password . "')"
		);

		echo "<br/>Admin user created successfully!";
	}

?>