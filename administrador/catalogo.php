<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/estilo.css">
    </head>

    <body>
        <?php
          include("Barras.php");
            ?>
            <div class="catal">
                <a href="agregar-producto.php" class="btn-a">Agregar producto</a>

                <table class="catalogo_neg" border="2">
                    <tr>
                        <th colspan="6">
                            Mi catalogo de productos
                        </th>
                    </tr>
                    <?php
                        $uss=$_SESSION['adminLog'];
                        $sqlCatalogo="SELECT Preciounitario,NombreP,idproducto FROM productos WHERE idnegocio=".$uss.";";
                        $res=mysqli_query($mysqli,$sqlCatalogo);
                        $num=0;
                        echo '<tr>';
                        while($fila=mysqli_fetch_array($res)) {
                            echo'
                            <td>
                                <div class="producto_imagen">
                                    <img src="img/img.jpg"width="50%">
                                </div>
                                <div class="producto_desc">
                                    <p>
                                        '.$fila[1].'
                                    </p>
                                <div class="Precio">
                                    <p align="left">
                                        '.$fila[0].'
                                    </p>
                                </div>
                                    <p align="right">
                                        <a href="ver-producto.php?id='.$fila[2].'">
                                            <button class="btn-int">
                                                Detalles
                                            </button>
                                        </a>
                                    </p>
                                </div>
                            </td>';
                            $num++;
                            if($num==5){
                                echo '</tr><tr>';
                                $num=0;
                            }
                        }
                    echo '</tr>';
                    ?>
                </table>
            </div>
    </body>

</html>
