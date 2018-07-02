<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Ventas </title>
    <link rel="stylesheet" href="CSS/estilo.css">


    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
    <?php
      include("Barras.php");
        ?>
        <section>
            <div class="contenido-ventas">

            <table class="tabla_pedido">
                <tr>
                    <th colspan="3">
                        <h2>Pedidos</h2>
                    </th>
                </tr>
                <?php
                    $sqlPedidos="select ventas.total,ventas.fecha,rdv.iddetalleventa,ventas.idventa,usuarios.nombres,ventas.folio, usuarios.apaternou, usuarios.amaternou from rdv inner join ventas on rdv.idventa=ventas.idventa inner join detalleventa on rdv.iddetalleventa=detalleventa.iddetalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join usuarios on detalleventa.idusuario=usuarios.idusuario inner join negocios on productos.idnegocio=negocios.idnegocio where productos.idnegocio=".$_SESSION['adminLog']." && ventas.statusV=1 group by ventas.idventa order by ventas.fecha desc";
                    $resPedidos=mysqli_query($mysqli,$sqlPedidos);
                    while($fila=mysqli_fetch_array($resPedidos)){
                        echo '<tr><td  colspan="2">Usuario: <b>'.$fila[6].' '.$fila[7].' '.$fila[4].'</b></td><td>Folio: '.$fila[5].'</td></tr>';
                        $sqlVentaPedido="select productos.NombreP,productos.preciounitario,detalleventa.cantidad from rdv inner join detalleventa on rdv.iddetalleventa=detalleventa.iddetalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join ventas on rdv.idventa=ventas.idventa where ventas.idventa=".$fila[3];
                        $resVentaPedido=mysqli_query($mysqli,$sqlVentaPedido);
                        echo '<th>Cantidad</th><th>Producto</th><th>Precio</th>';
                        while($fila1=mysqli_fetch_array($resVentaPedido)){
                            echo '
                                <tr>
                                    <td>
                                        '.$fila1[2].'
                                    </td>
                                    <td>
                                        '.$fila1[0].'
                                    </td>
                                    <td>
                                        $'.$fila1[1].'
                                    </td>
                                </tr>
                            ';
                        }
                        echo '
                            <tr>
                                <td colspan="3" style="text-align: right;">Total: $'.$fila[0].'</td>
                            </tr>
                            <tr>
                                <td colspan="6"><hr><br></td>
                            </tr>
                        ';
                    }
                ?>
            </table>

        </div>
        </section>
</body>
</html>
