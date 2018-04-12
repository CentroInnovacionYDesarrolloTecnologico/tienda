<?php
	session_start();
	$id_pro=$_GET['idProd'];
	$negocio=$_GET['cv_n'];
	$usu=$_GET['neg'];
	echo $id_pro;
	echo $negocio;
	echo $usu;
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="select precio,producto,negocio from productos where codigo='".$id_pro."';";
		$res=mysqli_query($mysqli,$sql);
		while($fila=mysqli_fetch_array($res)){
			echo "<br>".$fila[0].": ".$fila[1]." de ".$fila[2];
		}
	}	
?>