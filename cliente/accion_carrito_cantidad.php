<?php
    require("conexion.php");
    $id=$_GET['prod'];
    $usu=$_GET['usu'];
    $tipo=$_GET['pro'];
    switch($tipo){
        case "mas":
            $sqlModCantidad="update detalleventa set Cantidad=Cantidad+1 where idDetalleVenta=".$id;
            break;
        case "menos":
            $sqlModCantidad="update detalleventa set Cantidad=Cantidad-1 where idDetalleVenta=".$id;
            break;
    }
    $resModCantidad=mysqli_query($mysqli,$sqlModCantidad);
    if(!$resModCantidad){
        echo "Oh oh... :c";
    }else{
        header("Location: carrito.php");
    }
?>
