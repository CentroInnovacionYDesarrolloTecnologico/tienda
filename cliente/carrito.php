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
                <?php
                    $sqlNegoCarrito="select negocios.idnegocio, negocios.NNegocio from detalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join negocios on productos.idnegocio=negocios.idnegocio where detalleventa.status=1 group by negocios.idnegocio";
                    $resNegoCarrito=mysqli_query($mysqli,$sqlNegoCarrito);
                    while($fila12=mysqli_fetch_array($resNegoCarrito)){
                        echo ' <table class="carrito" cellpadding="3">';
                        echo '<tr><th colspan="6">'.$fila12[1].'</th></tr>';
                        $sqlCarrito="select detalleventa.Direccion,detalleventa.Subtotaldeproductos,sum(detalleventa.Cantidad), productos.NombreP,productos.Preciounitario, negocios.NNegocio, productos.Preciounitario, detalleventa.idDetalleVenta,detalleventa.idproducto,detalleventa.idusuario from detalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join negocios on productos.idnegocio=negocios.idnegocio where detalleventa.idusuario=".$_SESSION['usrcnf']." && negocios.idnegocio=".$fila12[0]." && detalleventa.status=1 group by detalleventa.idproducto;";
                        $resCarrito=mysqli_query($mysqli,$sqlCarrito);
                        $totalSUM=0;
                        $conta=0;
                        $send="";
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
                                        <button id="reducir_'.$fila[8].'" onclick="cantidad_reducir('.$fila[7].','.$fila[9].')">
                                            &#45;
                                        </button>
                                        ';
                                        if($fila[2]<=1){
                                            echo '
                                                <script>
                                                    var boton_r=document.getElementById("reducir_'.$fila[8].'");
                                                    boton_r.disabled=true;
                                                </script>
                                            ';
                                        }
                                        echo $fila[2];
                                        echo '
                                        <button onclick="cantidad_aumentar('.$fila[7].','.$fila[9].')">
                                            &#43;
                                        </button>
                                    </td>
                                    <td>
                                        <a href="accion_eliminar_carrito.php?detal='.$fila[7].'">
                                            <button>
                                                Eliminar
                                            </button>
                                        </a>
                                    </td>
                                </tr>';
                                $send=$send."&dett".$conta."=".$fila[7];
                                $conta++;
                            $totalSUM=$totalSUM+($fila[6]*$fila[2]);

                        }
                        echo '
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td>
                            <td align="right"> Total de compra: $'.$totalSUM.'</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td><td></td>
                            <td align="right" colspan="2">
                                <a href="procesar_compra.php?neg='.$fila12[0].$send.'&cant='.$conta.'"><input type="submit" value="Terminar compra"></a>
                            </td>
                        </tr>
                        </table>
                        <br>
                        ';



                    }
                    if(isset($_GET['proc'])!=0 && strcmp($_GET['proc'],"exito")==0){
                        echo '
                            <script>
                                window.alert("Compra procesada con exito");
                            </script>
                        ';
                    }
                ?>

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
