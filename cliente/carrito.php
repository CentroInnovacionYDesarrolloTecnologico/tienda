 <html>
        <head>
        <title>
            CecyEmprende
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
            <center> 
                <h1 class="titulo_carrito">
                    Carrito de compras 
                </h1> 
                <?php
                for($i=0;$i<10;$i++){
                    echo '<table class="carrito" cellpadding="3"> <tr><td><img src="img/producto.jpg" width="20%"></td><td>Nombre de producto</td><td>Precio Total</td> <td>Precio Unitario</td> <td> cantidad:<input type="number" width="50%"/></td></tr>' ;
                }
                 echo '</table><table  class="Terminar_compra"><tr><td align="right"> Total de compra:##</td></tr><tr><td align="right"><input type="submit" value="Terminar compra"></td></tr></table>';
                ?>
            </center>
        </div>
     </body>
</html>
