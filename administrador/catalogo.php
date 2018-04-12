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
              <li><a href="catalogo.html">Mi catalogo</a>  </li>
              <br><br>
              <li><a href="ventas.html">ventas</a> </li>
              <br><br>
              <li><a href="Calificaciones.html">Calificaciones</a> </li>
              <br><br>
              <li><a href="Cuenta.html">Mi cuenta</a> </li>
              <br><br>
              <li><a href="Login.html">Cerrar sesion</a> </li>
            </ul>
          </div>


      </aside>

      <div class="catal">
        <center>
          <form class="example" action="#">
          <input type="text" placeholder="Buscar..." name="search">
          <button type="submit"><i class="	fa fa-search"></i></button>
        </form>
      </center><br><br>
        <table class="catalogo_neg" border="2" >

                <tr>

                    <th colspan="7">
                        Mi catalogo de productos
                    </th>

                </tr>
                <script type="text/javascript">
                    for(o=0;o<3;o++){
                        document.write('<tr>')
                    for(i=0;i<7;i++){
                        document.write('<td><div class="producto_titulo">Producto</div><div class="producto_imagen" ><img src="img/img.jpg"width="50%"></div><div class="producto_desc"><p>nombre del producto</p><div class="Precio"><p align="left"> Precio:####</p></div><div class="BOTON_COMPRA"><p align="right"><button><a href="Ver-producto.html">ver producto</a></button></p></div></div></td>')

                    }
                    }
                </script>


            </table>


      </div>
    </div>
  </body>
</html>
