<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Mi cuenta Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">


    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
</head>

<body>
    <?php
      include("Barras.php");
        ?>
        <div class="calif">
            <div class="Grafica">
                <img src="img/califf.jpg" alt="">

            </div>
            <div class="estrellas">
                <a href="#" title=" 1 estrellas">&#9733;</a>
                <a href="#" title=" 2 estrellas">&#9733;</a>
                <a href="#" title=" 3 estrellas">&#9733;</a>
                <a href="#" title=" 4 estrellas">&#9733;</a>
                <a href="#" title=" 5 estrellas">&#9733;</a>
                <div class="Promedio-calificacion">
                    Mi calificacion es de :4.9
                </div>
            </div>

            <div class="comentarios">

                    <h4>Comentarios a mi negocio</h4>
                    <table class="items-hp" border=".5" align-items="center">
                        <tr>
                            <td>Comentario</td>
                            <td>Usuario</td>
                            <td>correo</td>
                        </tr>
                        <script type="text/javascript">
                            for (o = 0; o < 5; o++) {
                                document.write('<tr>')
                                for (i = 0; i < 2; i++) {
                                    document.write('<td></td>')
                                }
                                document.write('<td> </td>')
                            }

                        </script>
                    </table>
                    <a href="#">Anteriores</a>

            </div>
        </div>
    </body>
</html>
