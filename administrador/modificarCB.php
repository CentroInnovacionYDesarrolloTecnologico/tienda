<?php
	$CB=$_POST['CB'];
    $id=$_GET['id'];
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="UPDATE Productos SET Cbarras='".$CB."' WHERE idproducto=".$id;
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			echo 'El precio unitario del producto no pudo ser modificado';
		}else{
			header ('Location: Catalogo.php');
		}
	}
?>
