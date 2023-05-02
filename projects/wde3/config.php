<?php
	const DBHOST = 'sql113.byethost11.com';
	const DBUSER = 'b11_33360046';
	const DBPASS = 'Safety.2019';
	const DBNAME = 'b11_33360046_loginSystem';

	$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

	if ($conn->connect_error) {
	  die('Could not connect to the database!' . $conn->connect_error);
	}
?>