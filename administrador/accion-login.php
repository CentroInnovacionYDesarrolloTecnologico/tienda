<?php
	session_start();
	$nom=$_POST['Nom'];
	$pass=password_hash($_POST['cont'],PASSWORD_DEFAULT);
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sel="select PasswordN,idnegocio from negocios where CorreoRN='".$nom."';";
		$resSel=mysqli_query($mysqli,$sel);
		while($fila = mysqli_fetch_array($resSel)){
			$contra=$fila[0];
            $uss=$fila[1];
		}
		if(password_verify($_POST['cont'],$contra)){
			$_SESSION['adminLog']=$uss;
            header("Location: index.php");
		}else{
			header("Location: login.php?est=err");
		}
	}
?>
