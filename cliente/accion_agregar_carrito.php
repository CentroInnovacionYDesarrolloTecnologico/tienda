<?php
	session_start();
    $uss=$_SESSION['usrcnf'];
	$id_pro=$_GET['idProd'];
	$negocio=$_GET['cv_n'];
	$nombre=$_GET['neg'];
	require("conexion.php");
    $sql="select productos.preciounitario,productos.NombreP,productos.idnegocio, negocios.Nnegocio,productos.idproducto from productos inner join negocios on productos.idnegocio=negocios.idnegocio where idproducto='".$id_pro."';";
    $res=mysqli_query($mysqli,$sql);
    while($fila=mysqli_fetch_array($res)){
        echo " Precio(".$fila[0]."): ".$fila[1]." de negocio ".$fila[2]."(".$fila[3].") ";
        $idp=$fila[4];
        $precio=$fila[0];
    }
    $sqlCompa="select iddetalleventa from detalleventa where idproducto=".$id_pro." && idusuario=".$uss." && status=1";
    echo $sqlCompa."<br>";
    $resCompa=mysqli_query($mysqli,$sqlCompa);
    if(mysqli_num_rows($resCompa)!=0){
        if($fila11=mysqli_fetch_array($resCompa)){
        $sqlUpd="update detalleventa set cantidad=cantidad+1 where iddetalleventa=".$fila11[0].";";
        echo "<br>".$sqlUpd;
        $resUpd=mysqli_query($mysqli,$sqlUpd);
        if(!$resUpd){
            echo "Oh no... :c";
        }else{
           header("Location: negocio.php?cv_n=".$negocio."&neg=".$nombre."");
        }
    }
    }else{
        $sqlInsercion="insert into detalleventa (idusuario,direccion,idproducto,subtotaldeproductos,cantidad,status) values (".$uss.",'Por obtener',".$idp.",".$precio.",1,1)";
        $resInsert=mysqli_query($mysqli,$sqlInsercion);
        if(!$resInsert){
            echo "Oh oh";
        }else{
           header("Location: negocio.php?cv_n=".$negocio."&neg=".$nombre."");
        }
    }
?>
