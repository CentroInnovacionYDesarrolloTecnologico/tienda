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
                <form class="example" action="#">
                    <input type="text" placeholder="Buscar..." name="search">
                    <button type="submit">Buscar</button>
                    <a href="agregar-producto.php"><button type="button">Agregar producto</button></a>
                </form>

                <table class="catalogo_neg" border="2">
                    <tr>
                        <th colspan="7">
                            Mi catalogo de productos
                        </th>
                    </tr>
                    <?php
                    $uss=$_SESSION['adminLog'];
                        $sqlCatalogo="SELECT Preciounitario,NombreP,idproducto FROM productos WHERE idnegocio=".$uss.";";
                        $res=mysqli_query($mysqli,$sqlCatalogo);
                        while($fila=mysqli_fetch_array($res)) {
                            echo '<tr>';
                            echo'<td><div class="producto_imagen" ><img src="img/img.jpg"width="50%"></div><div class="producto_desc"><p>'.$fila[1].'</p><div class="Precio"><p align="left">'.$fila[0].'</p></div><div class="BOTON_COMPRA"><p align="right"><a href="ver-producto.php?id='.$fila[2].'"><button>ver producto </button></a></p></div></div></td>';
                        }
                    ?>
                </table>
            </div>
    </body>

</html>
