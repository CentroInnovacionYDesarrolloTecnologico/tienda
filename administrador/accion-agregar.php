<?php
    session_start();
	$nom=$_POST['nombre'];
	$des=$_POST['descrip'];
	$pre=$_POST['precio'];
    $cod=$_POST['codigo'];
    $uss=$_SESSION['adminLog'];
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="INSERT INTO `Patiyotl`.`productos` (NombreP,Descripcion,Preciounitario,Cbarras,idnegocio,disponibilidad) VALUES ('".$nom."','".$des."','".$pre."','".$cod."','".$uss."',1);";
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			echo 'El producto no pudo ser agregado';
		}else{
			header("Location: catalogo.php");
		}
	}	
?>
