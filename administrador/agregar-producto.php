
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Agregar producto</title>
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
                <img src="img/logo-812763_960_720.png" width="400%" title="Menu" alt="logo"><br/><br/><br/>
                </a>
                  </li>
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
      </div>
      <div class="add-producto">
        <button type="button" class="btn-back" title="Volver al catalogo" name="button"><a href="Catalogo.html">Regresar</a> </button><br><br><br>
        <div class="imagen-agregar-producto">
          <button type="button" title="Agregar imagen del producto" name="button"><img src="img/agregar-imagen.jpg" title="Agregar imagen del producto" width="100%" class="img-add-pp" alt=""></button>
        </div>
        <div class="Agregaaar">
          <h1>Agregar nuevo producto</h1>
          <p>Para agregar un nuevo producto llena los siguientes campos <br> con los datos correspondientes del producto</p>
        </div>
        <br>
        <div class="datos-del-producto">
            <form method="post" action="accion-agregar.php"> 
                <center>
                    Nombre del producto: <br>
                    <input type="text" name="nombre" value="" required="required"><br><br>
                    Descripcion:<br>
                    <textarea name="descrip" class="descripcion" rows="4" cols="22" required="required"></textarea><br><br>
                    Precio:<br>
                    <input type="text" name="precio" value=""><br><br>
                    codigo de barras:<br>
                    <input type="text" name="codigo" value=""><br><br><br><br>
                    <input type="submit" value="Agregar Producto">
                </center>
            </form>
        </div>
      </div>
  </body>
</html>
