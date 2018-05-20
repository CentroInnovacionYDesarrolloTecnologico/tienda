<?php
	$nom=$_POST['nombre'];
	require("../cliente/conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="DELETE FROM`Patiyotl`.`producto` where id_Producto='.$id.'";
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			echo 'El producto no pudo ser agregado';
		}else{
			echo 'Producto agregado exitosamente';
		}
	}
?>
