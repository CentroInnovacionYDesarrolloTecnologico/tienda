<?php
	session_start();
    $uss=$_SESSION['usrcnf'];
	$id_pro=$_GET['idProd'];
	$negocio=$_GET['cv_n'];
	$nombre=$_GET['neg'];
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="select productos.preciounitario,productos.NombreP,productos.idnegocio, negocios.Nnegocio,productos.idproducto from productos inner join negocios on productos.idnegocio=negocios.idnegocio where idproducto='".$id_pro."';";
		$res=mysqli_query($mysqli,$sql);
		while($fila=mysqli_fetch_array($res)){
			echo "<br>Precio(".$fila[0]."): ".$fila[1]." de negocio ".$fila[2]."(".$fila[3].")<br>";
            $idp=$fila[4];
            $precio=$fila[0];
		}
	}	
    $sqlInsercion="insert into detalleventa (idusuario,direccion,producto,subtotaldeproductos,cantidad) values (".$uss.",'Por obtener',".$idp.",".$precio.",1)";
    $resInsert=mysqli_query($mysqli,$sqlInsercion);
    if(!$resInsert){
        echo "Oh oh";
    }else{
        header("Location: negocio.php?cv_n=".$negocio."&neg=".$nombre."");
    }
?>
