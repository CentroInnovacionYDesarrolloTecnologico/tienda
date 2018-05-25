<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Catalogo Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">


      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
      <?php
        include("Barras.php");
        $id=$_GET['id'];
       $id=$_POST['id'];
       $desc=$POST['Descripcion'];
      ?>
      <div class="producto-visto">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a class="btn-atras-catalogo" title="Volver" href="javascript:window.history.go(-1);">Volver</a>
          <?php
           $sqlVerP="SELECT NombreP FROM productos WHERE idproducto=".$id.";";
           $res=mysqli_query($mysqli,$sqlVerP);
            while($fila=mysqli_fetch_array($res)) {
            $nompro=$fila[0];
             }
         ?>

        <h2><?php echo $nompro;?></h2>
        <div class="v-prod">
            <img src="img/produc.jpg" width="35%" height="300px" alt="Producto">
          </div>
          <div class="decripcion">

              <form method="post" action="modificardesp.php" >
              Descripcion:
                    <?php
                        $sqlVerP="SELECT Descripcion FROM productos WHERE idproducto=".$id.";";
                        $res=mysqli_query($mysqli,$sqlVerP);
                        while($fila=mysqli_fetch_array($res)) {
                            $desc=$fila[0];
                        }
                    ?>
              <textarea name="comment" rows="7" cols="55" form="usrform"><?php echo $desc; ?></textarea>
              <input class="mult_submit" type="submit" name="submit_mult" value="Modificar Descripción" title="Modificar"  >
              </form>

          </div>
          <div class="cantidad">
            <p>Cantidad disponible para tienda en linea:
            <label for="txt_cantidad">      12</label>
            </p>
          </div>
          <div class="btn_addpr">
            <p>Use los botones para añadir producto en piezas y el cuadro de texto para añadirlo en peso
             (si es en peso recuerda poner punto decimal ejemplo: 1.750---- SOLO NUMEROS) </p>

             <label for="txt_cantidad">      Precio Unitario:</label>

             <?php
             $sqlVerP="SELECT Preciounitario FROM productos WHERE idproducto=".$id.";";
             $res=mysqli_query($mysqli,$sqlVerP);
             while($fila=mysqli_fetch_array($res)) {
             $preuni=$fila[0];
                }
             ?>

            <input type="text" name="tipo_de_dato" value="<?php echo $preuni; ?>" />

            <input class="mult_submit" type="submit" name="submit_mult" value="Modificar Precio" title="Modificar cantidad"  >
          </div>
      </div>
  </body>
</html>
