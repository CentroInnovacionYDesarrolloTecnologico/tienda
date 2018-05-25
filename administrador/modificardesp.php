<?php
    require("conexion.php");
    $id=$_GET['id'];
    $desc=$_GET['Descripcion'];
        $ActP="UPDATE PRODUCTOS SET Descripcion='.$desc.' WHERE id_Producto='.$id.'";
        $res=mysqli_query($mysqli, $ActP);
        if(!$res){
            echo 'La descripción del producto no pudo ser modificada';
        }
        else{
            echo 'La descripción del producto fue modificada exitosamente';
            header("location: ver-producto.php");
        }
?>
