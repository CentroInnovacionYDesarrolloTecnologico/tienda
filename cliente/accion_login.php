<?php
	session_start();
	$us=$_POST['uss'];
	$pass=password_hash($_POST['cont'],PASSWORD_DEFAULT);
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sel="select PasswordU,idusuario from usuarios where usuario='".$us."';";
		$resSel=mysqli_query($mysqli,$sel);
		while($fila = mysqli_fetch_array($resSel)){
			$contra=$fila[0];
            $uss=$fila[1];
		}
		if(password_verify($_POST['cont'],$contra)){
			$_SESSION['usrcnf']=$uss;
            echo $uss;
            header("Location: menu_principal.php");
		}else{
			header("Location: login.php?est=err");
		}
	}	
?>
