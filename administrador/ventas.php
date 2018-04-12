<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Ventas Patiyotl</title>
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
              <li><a href="Ventas.html">ventas</a> </li>
              <br><br>
              <li><a href="Calificaciones.html">Calificaciones</a> </li>
              <br><br>
              <li><a href="Cuenta.html">Mi cuenta</a> </li>
              <br><br>
              <li><a href="Login.html">Cerrar sesion</a> </li>
            </ul>
          </div>


      </aside>

        <div class="Ventas">
          <center><form class="example" action="#">
          <input type="text" placeholder="Buscar (numero de venta)..." name="search">
          <button type="submit"><i class="	fa fa-search"></i></button>
          &emsp;&emsp;&emsp;&emsp;
          <select class="Tipo-ventas" name=""><option>Todas mis ventas</option><option>Realizadas</option><option>Ventas Pendientes</option>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br><br><br>
            <input type="button" name="" value="Modificar">
        </form><br><br><br>



            <table class="items-hp"  border=".5" align-items="center">
              <tr>
                <td>No.venta</td>
                <td>Direccion</td>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Costo</td>
                <td>productos</td>
                <td>Estatus</td>
                <td>Modificar</td>
              </tr>
              <script type="text/javascript">
                    for(o=0;o<19;o++){
                        document.write('<tr>')
                    for(i=0;i<7;i++){
                        document.write('<td></td>')


                    }
                    document.write('<td><center><select class="Tipo-ventas" name=""><option>Realizada</option><option>Pendiente</option></select></center> </td>')
                    }
                </script>
              </table>





    </div>
  </body>
</html>
