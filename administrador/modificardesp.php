<?php
	$desc=$_POST['Descripcion'];
    $id=$_GET['id'];
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="UPDATE Productos SET Descripcion='".$desc."' WHERE idproducto=".$id;
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			echo 'La descripción del producto no pudo ser modificada ';
		}else{
			echo 'Descripción del producto modificada exitosamente';
		}
	}
?>
