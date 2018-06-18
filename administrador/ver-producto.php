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
      ?>
      <a class="btn-a" title="Volver" href="javascript:window.history.go(-1);">Volver</a>
        <div class="producto-visto">
          <?php
           $sqlVerP="SELECT NombreP FROM productos WHERE idproducto=".$id.";";
           $res=mysqli_query($mysqli,$sqlVerP);
            while($fila=mysqli_fetch_array($res)) {
            $nompro=$fila[0];
             }
         ?>

        <h2><?php echo $nompro;?></h2>
        <div class="Codigo-Barras">
                <?php
                    $sqlVerP="SELECT Cbarras FROM productos WHERE idproducto=".$id.";";
                    $res=mysqli_query($mysqli,$sqlVerP);
                    while($fila=mysqli_fetch_array($res)) {
                        $CB=$fila[0];
                    }
                ?>
            <p>
                <label for="txt_CB">Codigo de barras: <b style="display: inline-block;"><?php echo $CB; ?></b></label>
            </p>
        </div>
        <div class="v-prod">
            <img src="img/produc.jpg" height="300px" alt="Producto">
          </div>
        <div style="width: 100%; margin: auto;">
        <div style="display: inline-block;" class="decripcion">

              <form method="post" action="modificardesp.php?id=<?php echo $id; ?>">
                  <label >Descripci&oacute;n:</label>
                    <?php
                        $sqlVerP="SELECT Descripcion FROM productos WHERE idproducto=".$id.";";
                        $res=mysqli_query($mysqli,$sqlVerP);
                        while($fila=mysqli_fetch_array($res)) {
                            $desc=$fila[0];
                        }
                    ?>
              <textarea style="display: inline-block;" name="Descripcion"><?php echo $desc; ?></textarea>
              <input type="submit" name="submit_mult" value="Modificar Descripción" title="Modificar">
              </form>

          </div>
            <div style="width: 10%; display: inline-block;"></div>
          <div style="display: inline-block;"  class="btn_addpr">

              <form method="post" action="modificarpre.php?id=<?php echo $id; ?>">
             <label for="txt_cantidad">Precio Unitario:</label>

             <?php
             $sqlVerP="SELECT Preciounitario FROM productos WHERE idproducto=".$id.";";
             $res=mysqli_query($mysqli,$sqlVerP);
             while($fila=mysqli_fetch_array($res)) {
             $preuni=$fila[0];
                }
             ?>

            <input type="text" name="Preciounitario" value="<?php echo $preuni; ?>" />

            <input type="submit" name="submit_mult" value="Modificar Precio" title="Modificar cantidad"  >

            </form>
          </div>
            </div>
      </div>
  </body>
</html>
