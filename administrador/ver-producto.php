<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Catalogo Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">


      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body bgcolor="#d0d8e5">
      <?php
        include("Barras.php");
      ?>
      <div class="producto-visto">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a class="btn-atras-catalogo" title="Volver" href="javascript:window.history.go(-1);">volver</a>

        <div class="v-prod">
            <img src="img/produc.jpg" width="35%" height="300px" alt="Producto">
          </div>
          <div class="decripcion">

              descripcion


              <textarea name="comment" rows="7" cols="55" form="usrform">Descripcion del producto</textarea>

                <input class="mult_submit" type="submit" name="submit_mult" value="Modificar" title="Modificar descripcion"  >

          </div>
          <div class="cantidad">
            <p>Cantidad disponible para tienda en linea:
            <label for="txt_cantidad">      12</label>
            </p>
          </div>
          <div class="btn_addpr">
            <p>Use los botones para añadir producto en piezas y el cuadro de texto para añadirlo en peso
             (si es en peso recuerda poner punto decimal ejemplo: 1.750---- SOLO NUMEROS) </p>

            <button type="button" name="button" >-</button>
            <input type="text" name="tipo_de_dato"/>
            <button type="button" name="button">+</button>

            <input class="mult_submit" type="submit" name="submit_mult" value="Modificar" title="Modificar cantidad"  >
                     <?php
                        $sqlVerP="";
                        $res=mysqli_query($mysqli,$sqlVerP);
                    ?>
          </div>
      </div>
  </body>
</html>
