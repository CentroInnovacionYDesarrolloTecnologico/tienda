<?php
		define("MYSQL_CONN_ERROR", "Unable to connect to database."); 
		mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR || MYSQLI_REPORT_ALL);
		$mysqli = mysqli_connect("localhost", "root", "", "patiyotl");
?>
