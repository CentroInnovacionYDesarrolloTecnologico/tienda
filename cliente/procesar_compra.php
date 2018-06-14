<?php
    session_start();
    require("conexion.php");
    extract($_GET);
    $us=$_SESSION['usrcnf'];
    $sqlCompra="select sum(productos.Preciounitario*detalleventa.Cantidad) from detalleventa inner join productos on detalleventa.idproducto=productos.idproducto where detalleventa.idusuario=".$us." && detalleventa.status=1 && productos.idnegocio=".$_GET['neg'];
    $resCompra=mysqli_query($mysqli,$sqlCompra);
    while($fila=mysqli_fetch_array($resCompra)){
        echo $fila[0]."<br>";
        $Total=$fila[0];
    }
    $sqlConsecu="select CantidadVentas from negocios where idnegocio=".$_GET['neg'];
    $resConsecu=mysqli_query($mysqli,$sqlConsecu);
    while($fila=mysqli_fetch_array($resConsecu)){
        $num=$fila[0]+1;
    }
    $fecha=getdate();
    $folioCod=$_GET['neg'].substr($fecha['year'],-2).str_pad($fecha['mon'],2,0,STR_PAD_LEFT).$fecha['mday'].$num;
    echo $folioCod;
    $sqlInsVenta="insert into ventas (folio,total,statusv,idNegocioFp) values ('".$folioCod."',".$Total.",1,'2');";
    $resInsVenta=mysqli_query($mysqli,$sqlInsVenta);
    if(!$resInsVenta){
        echo "Oh no... :c";
    }else{
        $sqlConta="update negocios set cantidadventas=cantidadventas+1 where idnegocio=".$_GET['neg'].";";
        $resConta=mysqli_query($mysqli,$sqlConta);
        for($it=0;$it<$cant;$it++){
            $sqlUpdCarrito="update detalleventa set status=0 where iddetalleventa=".$_GET['dett'.$it].";";
            $resUpdCarrito=mysqli_query($mysqli,$sqlUpdCarrito);
            if($resUpdCarrito){
                $sqlidVenta="select idventa from ventas where folio='".$folioCod."';";
                echo $sqlidVenta;
                $residVenta=mysqli_query($mysqli,$sqlidVenta);
                while($fila10=mysqli_fetch_array($residVenta)){
                    $idVenta=$fila10[0];
                }
                $sqlInsRDV="insert into RDV (idventa,iddetalleventa) values (".$idVenta.",".$_GET['dett'.$it].");";
                $resInsRDV=mysqli_query($mysqli,$sqlInsRDV);
            }
        }
        header("Location: Carrito.php?proc=exito");
    }
?>
