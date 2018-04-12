<html>
    <head>
        <title>
            CecyEmprende
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
            include ("barras.php");
    
        ?>
        <div class="contenido">
            <table class="catalogo_neg" cellspacing="8">
               
                <tr>
                    <th>
                        Probando
                    </th>
                    <th>
                        Esta
                    </th>
                    <th>
                        Tabla
                    </th>
                    <th>
                        PRO
                    </th>
                    <th>
                        DU
                    </th>
                    <th>
                        CTO
                    </th>

                </tr>
                <?php
                    for($o=0;$o<4;$o++){
                       
                        for($i=0;$i<6;$i++){
                        echo'<td><div class="producto_titulo">Emperador</div><div class="producto_imagen"><img src="img/img.jpg" width="50%"></div><div class="producto_desc"><p>Galletas Emperador 120gr </p><div class="Precio"><p align="left"> Precio:#</p></div><div class="BOTON_COMPRA"><p align="right"><a href="carrito.php"><button><img src="img/carrito.jpg" width="20%"></button></a></p></div></div></td>';
                        }
                     echo '</tr>';
                    
                    }
                ?>
               
             
            </table>
        </div>
    </body>
</html>