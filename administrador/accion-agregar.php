<?php
session_start();
$nom=$_POST['nombre'];
$des=$_POST['descrip'];
$pre=$_POST['precio'];
$cod=$_POST['codigo'];
$uss=$_SESSION['adminLog'];
require("conexion.php");
$dir_subida = 'img/productos/';
$sqlMaxNot="select max(idproducto) from productos";
$resMaxNot=mysqli_query($mysqli,$sqlMaxNot);
while($fila=mysqli_fetch_array($resMaxNot)){
    $maximo=$fila[0]+1;
}
$nombre_archivo="producto_".$maximo.".jpg";
$fichero_subido = $dir_subida.$nombre_archivo;
if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {

	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
	}
	else{
		$sql="INSERT INTO `Patiyotl`.`productos` (NombreP,Descripcion,Preciounitario,Cbarras,idnegocio,disponibilidad,Imagen) VALUES ('".$nom."','".$des."','".$pre."','".$cod."','".$uss."',1,'".$fichero_subido."');";
		$res=mysqli_query($mysqli,$sql);
		if(!$res){
			echo 'El producto no pudo ser agregado';
		}else{
			header("Location: catalogo.php");
		}
	}
} else {
    echo '<pre>';
    echo "¡Posible ataque de subida de ficheros!\n";
    echo 'Más información de depuración:';
    print_r($_FILES);
    print "</pre>";
}

?>
