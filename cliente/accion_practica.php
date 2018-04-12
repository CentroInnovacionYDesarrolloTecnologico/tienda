<?php
	$a=$_POST['usuario'];
	$b=$_POST['contra'];
	$c=$_POST['nombre'];
	$d=$_POST['app'];
	$e=$_POST['apm'];
	require("conexion.php");
	$sql="insert into usuario (usuario,pwd,nombre,apaterno,amaterno) values ('".$a."','".$b."','".$c."','".$d."','".$e."');";
	$res=mysqli_query($mysqli,$sql);
?>