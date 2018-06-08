 <html>
        <head>
        <title>
            Patiyotl
        </title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
            include ("barras.php");
            if(!isset($_SESSION['usrcnf'])!=0){
                header("Location: menu_principal.php");
            }
        ?>
        <div class="contenido">
                <h1 class="titulo_carrito">
                    Carrito de compras 
                </h1> 
                <table class="carrito" cellpadding="3">
                <?php
                    $sqlNegoCarrito="select negocios.idnegocio from detalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join negocios on productos.idnegocio=negocios.idnegocio group by negocios.idnegocio";
                    $resNegoCarrito=mysqli_query($mysqli,$sqlNegoCarrito);
                    while($fila12=mysqli_fetch_array($resNegoCarrito)){
                        $sqlCarrito="select detalleventa.Direccion,detalleventa.Subtotaldeproductos,sum(detalleventa.Cantidad), productos.NombreP,productos.Preciounitario, negocios.NNegocio, sum(productos.Preciounitario), detalleventa.idDetalleVenta,detalleventa.idproducto,detalleventa.idusuario from detalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join negocios on productos.idnegocio=negocios.idnegocio where detalleventa.idusuario=".$_SESSION['usrcnf']." && negocios.idnegocio=".$fila12[0]." group by detalleventa.idproducto;";
                        $resCarrito=mysqli_query($mysqli,$sqlCarrito);
                        while($fila=mysqli_fetch_array($resCarrito)){
                            echo '<tr>
                                    <td>
                                        <img src="img/producto.jpg" width="20%">
                                    </td>
                                    <td>
                                        '.$fila[3].'
                                    </td>
                                    <td>
                                        '.$fila[4].'
                                    </td>
                                    <td>
                                        $'.$fila[6].'
                                    </td>
                                    <td>
                                        Cantidad:
                                        <button onclick="cantidad_reducir('.$fila[7].','.$fila[9].')">
                                            &#45;
                                        </button>
                                        '.$fila[2].'
                                        <button onclick="cantidad_aumentar('.$fila[7].','.$fila[9].')">
                                            &#43;
                                        </button>
                                    </td>
                                    <td>
                                        <a href="accion_eliminar_carrito.php?detal='.$fila[8].'">
                                            <button>
                                                Eliminar
                                            </button>
                                        </a>
                                    </td>
                                </tr>';

                        }
                        echo '</table><table  class="Terminar_compra">';
                        $sqlCarritoSuma="select sum(detalleventa.subtotaldeproductos) from detalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join negocios on productos.idnegocio=productos.idproducto where idusuario=".$_SESSION['usrcnf']." && negocios.idnegocio=".$fila12[0];
                        $resCarritoSuma=mysqli_query($mysqli,$sqlCarritoSuma);
                        while($fila=mysqli_fetch_array($resCarritoSuma)){
                            echo '<tr><td align="right"> Total de compra: $'.$fila[0].'</td></tr><tr><td align="right"><input type="submit" value="Terminar compra"></td></tr></table>';
                        }

                    }
                ?>
                </table>
                <script>
                    function cantidad_reducir(prod,usu){
                        window.location="accion_carrito_cantidad.php?pro=menos&&prod="+prod+"&&usu="+usu;
                    }
                    function cantidad_aumentar(prod,usu){
                        window.location="accion_carrito_cantidad.php?pro=mas&&prod="+prod+"&&usu="+usu;
                    }
                </script>
        </div>
     </body>
</html>
