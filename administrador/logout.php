<?php
	session_start();
	unset($_SESSION['adminLog']);
	session_unset();

	session_destroy();

	header('Location: login.php' );
?>
