<?php
	$nom=$_POST['nombre'];
	$des=$_POST['descrip'];
	$pre=$_POST['precio'];
    $cod=$_POST['codigo'];
	require("../cliente/conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="INSERT INTO `Patiyotl`.`productos` (Cbarras,Descripcion,Preciounitario,codigo) VALUES ('".$nom."','".$des."','".$pre."','".$cod."');";
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			echo 'El producto no pudo ser agregado';
		}else{
			echo 'Producto agregado exitosamente';
		}
	}	
?>
