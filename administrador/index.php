<!DOCTYPE html>
<html lang="es">
  <head>
        <link rel="stylesheet" href="../administrador/CSS/estilo.css">
  </head>
  <body>
<?php
      include("Barras.php");
        ?>
    <div>
        <section>
            <h3 class="mens-bv">Bienvenido, <?php $sqlBusca="select nombrern from negocios where idnegocio=".$_SESSION['adminLog']; $resBusca=mysqli_query($mysqli,$sqlBusca); if($fila=mysqli_fetch_array($resBusca)){ echo $fila[0]; } ?></h3>
            <img class="img-index" src="img/2.png" alt="logo">
        </section>
    </div>
  </body>
</html>
