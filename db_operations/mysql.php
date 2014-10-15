<?php

	class MySQL {

	   	var $server;
	   	var $username;
	   	var $password;
	   	var $db_name;
	   	var $qry_result;
		
	   	function __construct($server, $username, $password, $db) {
	      $this->server = $server;
	      $this->username = $username;
	      $this->password = $password;
	      $this->db_name = $db;
	      //Connect to the database
	      $this->connect();
	   	}
		
	   	/* 
	      Connects the system to the given database.
	   	*/
	   	function connect() {
	      mysql_connect($this->server, $this->username, $this->password) or die(mysql_error());
	   	}

	   	function selectDB() {
	   		mysql_select_db($this->db_name) or die("Database does not exist.
	   	   	Please run the setup_database.php script or create_dabatabse.php script or create the database manually.<br />"
	   	   	. mysql_error());
	   	}

	}
?>