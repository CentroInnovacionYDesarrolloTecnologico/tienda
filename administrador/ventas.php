<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Ventas Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">


    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
    <?php
      include("Barras.php");
        ?>
        <div class="contenido">

            <table class="tabla_pedido" cellpadding="10" width="80%" cellspacing="5" style="background-color: white;">
                <tr>
                    <th>
                        <h2>Pedidos</h2>
                    </th>
                </tr>
                <?php
                    $sqlPedidos="select ventas.total,ventas.fecha,rdv.iddetalleventa,ventas.idventa,negocios.nnegocio,ventas.folio from rdv inner join ventas on rdv.idventa=ventas.idventa inner join detalleventa on rdv.iddetalleventa=detalleventa.iddetalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join negocios on productos.idnegocio=negocios.idnegocio where productos.idnegocio=".$_SESSION['adminLog']." && ventas.statusV=1 group by ventas.idventa order by ventas.fecha desc";
                    $resPedidos=mysqli_query($mysqli,$sqlPedidos);
                    while($fila=mysqli_fetch_array($resPedidos)){
                        echo '<tr><td>Tienda: <b>'.$fila[4].'</b> | Folio: '.$fila[5].'</td></tr>';
                        $sqlVentaPedido="select productos.NombreP,productos.preciounitario,detalleventa.cantidad from rdv inner join detalleventa on rdv.iddetalleventa=detalleventa.iddetalleventa inner join productos on detalleventa.idproducto=productos.idproducto inner join ventas on rdv.idventa=ventas.idventa where ventas.idventa=".$fila[3];
                        $resVentaPedido=mysqli_query($mysqli,$sqlVentaPedido);
                        while($fila1=mysqli_fetch_array($resVentaPedido)){
                            echo '
                                <tr>
                                    <td>
                                        '.$fila1[2].' '.$fila1[0].' -----------> $'.$fila1[1].'
                                    </td>
                                </tr>
                            ';
                        }
                        echo '
                            <tr>
                                <td>Total: $'.$fila[0].'</td>
                            </tr>
                            <tr>
                                <td>----------------------------------------------------------------------------------</td>
                            </tr>
                        ';
                    }
                ?>
            </table>

        </div>
</body>
</html>
