<?php
    require("conexion.php");
    if(isset($id=$_GET['id'])!=0){
        $id=$_GET['id'];
        $VerP="UPDATE productos SET Descripcion WHERE idproducto=".$id;
        echo $VerP;
        $VerP=mysqli_query($mysqli,);
        if(!$resEliminarCarrito){
            echo "Oh no... :c";
        }else{
            header("Location: .php");
        }
    }
?>
