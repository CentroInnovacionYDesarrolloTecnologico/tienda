<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Catalogo Patiyotl</title>
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body bgcolor="#d0d8e5">

    <div class="barra-superior">

      <div class="titulo">
        <h1> <center><br> PATIYOTL</center> </h1>
      </div>
    </div>
    <div class="cont">
      <aside class="barra-lateral" >
          <div class="logo">
            <ul>
              <li><a href="Menu.html">
              <img src="img/logo-812763_960_720.png" width="400%" title="Menu" alt="logo"><br><br></li>
              </a>
            </ul>
          </div>
          <br><br>
          <div class="opciones">
            <ul>
              <li><a href="Catalogo.html">Mi catalogo</a>  </li>
              <br><br>
              <li><a href="#">ventas</a> </li>
              <br><br>
              <li><a href="#">Calificaciones</a> </li>
              <br><br>
              <li><a href="#">Mi cuenta</a> </li>
              <br><br>
              <li><a href="Login.html">Cerrar sesion</a> </li>
            </ul>
          </div>


      </aside>
      <div class="producto-visto"><br><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a class="btn-atras-catalogo" title="Volver" href="javascript:window.history.go(-1);">volver</a>

        <div class="v-prod">
            <img src="img/produc.jpg" width="35%" height="300px" alt="Producto">
          </div>
          <div class="decripcion">

              descripcion <br>


              <textarea name="comment" rows="7" cols="55" form="usrform">Descripcion del producto</textarea>
              <br>
                <input class="mult_submit" type="submit" name="submit_mult" value="Modificar" title="Modificar descripcion"  >

          </div>
          <div class="cantidad">
            <p>Cantidad disponible para tienda en linea:
            <label for="txt_cantidad">      12</label>
            </p>
          </div>
          <div class="btn_addpr">
            <p>Use los botones para añadir producto en piezas y el cuadro de texto para añadirlo en peso
            <br>(si es en peso recuerda poner punto decimal ejemplo: 1.750---- SOLO NUMEROS) </p>
            <center>
            <button type="button" name="button" >-</button>
            <input type="text" name="tipo_de_dato"/>
            <button type="button" name="button">+</button>
            <br><br>
            <input class="mult_submit" type="submit" name="submit_mult" value="Modificar" title="Modificar cantidad"  >
          </center>

          </div>
      </div>

    </div>
  </body>
</html>
