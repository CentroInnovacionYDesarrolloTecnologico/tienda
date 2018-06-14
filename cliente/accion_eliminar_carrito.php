<?php
    require("conexion.php");
    if(isset($_GET['detal'])!=0){
        $prod=$_GET['detal'];
        $sqlEliminarCarrito="delete from detalleventa where iddetalleventa=".$prod;
        echo $sqlEliminarCarrito;
        $resEliminarCarrito=mysqli_query($mysqli,$sqlEliminarCarrito);
        if(!$resEliminarCarrito){
            echo "Oh no... :c";
        }else{
            header("Location: carrito.php");
        }
    }
?>
