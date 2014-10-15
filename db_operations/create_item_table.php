<?php

	if (empty($selectingDatabase)) {
    	require "db_connection.php";
    }

	$result = mysql_query("SHOW TABLES LIKE 'item'");
	$tableExists = mysql_num_rows($result);

	if($tableExists > 0) {
		echo "'item' table already exists!<br/>";
	
	} else {
		mysql_query(
			'CREATE TABLE item ( id int(11) NOT NULL auto_increment, 
				name varchar(20) NOT NULL,
				price DECIMAL(10,2) NOT NULL,
				PRIMARY KEY (id)
			)'
		);

		echo "Item table created!<br/> Inserting two sample items";

		mysql_query(
			"INSERT INTO item (name, price) VALUES ( 'Item A', '5.99')"
		);

		mysql_query(
			"INSERT INTO item (name, price) VALUES ( 'Item B', '12.99')"
		);

		echo "<br/>Items added successfully!";	
	}

	

?>