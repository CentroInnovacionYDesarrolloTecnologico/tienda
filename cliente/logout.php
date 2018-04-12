<?php
	session_start();
	unset($_SESSION['usrcnf']); 
	session_unset();
	
	session_destroy();
	 
	header('Location: login.php' );	 
?>