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
      <div class="producto-visto">
        <a class="btn-atras-catalogo" title="Volver" href="javascript:window.history.go(-1);">Volver</a>
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
            <label for="txt_CB">Codigo de barras</label>
            </p>
            <?php echo $CB; ?>
        </div>
        <div class="v-prod">
            <img src="img/produc.jpg" width="35%" height="300px" alt="Producto">
          </div>
          <div class="decripcion">

              <form method="post" action="modificardesp.php?id=<?php echo $id; ?>">
              Descripcion:
                    <?php
                        $sqlVerP="SELECT Descripcion FROM productos WHERE idproducto=".$id.";";
                        $res=mysqli_query($mysqli,$sqlVerP);
                        while($fila=mysqli_fetch_array($res)) {
                            $desc=$fila[0];
                        }
                    ?>
              <textarea name="Descripcion" rows="7" cols="55"><?php echo $desc; ?></textarea>
              <input class="mult_submit" type="submit" name="submit_mult" value="Modificar Descripción" title="Modificar"  >
              </form>

          </div>

          <div class="btn_addpr">

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

            <input class="mult_submit" type="submit" name="submit_mult" value="Modificar Precio" title="Modificar cantidad"  >

            </form>
          </div>
      </div>
  </body>
</html>
