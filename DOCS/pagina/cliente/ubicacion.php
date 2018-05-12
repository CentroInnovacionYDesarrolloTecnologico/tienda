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
    
        ?>
        <div class="contenido">

                <table class="Ubicacion_tabla" cellpadding="5">
                    <?php
                    $Direccion="AUN NO EXISTO SOLO SOY UNA PRUEBA";
                        for($i=0;$i<3;$i++){
                            echo '<tr class="Ubicacion"><td><img src="img/ubicacion.png" width="50%"/></td> <td>'.$Direccion.'</td><td><button>Cerrar</button></td><td><button><img src="img/borrar.png" width="50%"></button></td></tr>';
                        }
                    ?>
                
                </table>

        </div>
    </body>
</html>
