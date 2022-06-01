<?php
	session_start();

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "rentool";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$con) {
		die("failed to connect!" .
		mysqli_connect_error());
	}
?>