<?php
	$us=$_POST['uss'];
	$pass=password_hash($_POST['cont'],PASSWORD_DEFAULT);
	$nombre=$_POST['nom'];
	$app=$_POST['app'];
	$apm=$_POST['apm'];
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="INSERT INTO `cecyemprende`.`usuarios` (Usuario,contra,nombre,apellido_p,apellido_m) VALUES ('".$us."','".$pass."','".$nombre."','".$app."','".$apm."');";
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			header("Location: registro.php?req=1");
		}else{
			header("Location: login.php");
		}
	}	
?>