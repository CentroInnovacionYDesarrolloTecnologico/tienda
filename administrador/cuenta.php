<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Mi cuenta Patiyotl</title>
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
      <aside class="barra-lateral2" >
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
      <div class="Cuenta">
        <center><h1>Mi cuenta</h1></center>
        &emsp;&emsp;&emsp;&emsp;En esta seccion podras visualizar y modificar los datos de tu negocio, te recomndamos que no alteres los campos para no dañar tu pocision dentro del sistema
        <div class="Datos-personales-registro"><br>
          <center> <h4>DATOS PERSONALES</h4>

           Nombre (s):<br>
          <input type="text" name="htNombreA" value="" size="25" required="required"><br><br>
           Apellido paterno:<br>
          <input type="text" name="htApellidopB" value="" size="25" required="required"><br><br>
           Apellido materno:<br>
          <input type="text" name="htApellidomC" value="" size="25" required="required"><br><br>
           fecha de nacimiento:<br>
           <input type="date" name="" value="" required="required">
           </center>
          <br><br><br>

        </div>
        <div class="datos-negocio-registro">
          <center><h4>Datos del negocio</h4>

          Nombre del negocio:<br>
          <input type="text" name="" value="" required="required"> <br><br>
          Giro:<br>
          <select class="Giro" name=""  required="required">
            <option selected>Abarrotes</option>
            <option>Comida</option>
            <option >Farmacia</option>
            <option>Flores</option>
            <option>Otro</option>
          </select><br><br>
          Estado:<br>
          <select class="Estado" name="" required="required">
            <option>Aguascalientes</option><option>Baja California</option><option>Baja California Sur</option><option>Campeche</option>
            <option>Chiapas</option><option>Chihuahua</option><option>Ciudad de México</option><option>Coahuila</option>
            <option>Colima</option><option>Durango</option><option>Guanajuato</option><option>Guerrero</option><option>Hidalgo</option>
            <option>Jalisco</option><option selected>México</option><option>Michoacan</option><option>Morelos</option>
            <option>Nayarit</option><option>Nuevo León</option><option>Oaxaca</option><option>Puebla</option><option>Queretaro</option>
            <option>Quintana Roo</option><option>San Luis Potosi</option><option>Sinaloa</option><option>Sonora</option>
            <option>Tabasco</option><option>Tamaulipas</option><option>Tlaxcala</option><option>Veracruz</option><option>Yucatán</option>
            <option>Zacatecas</option>
          </select><br><br>
          Municipio:<br>
          <select class="Municipio" name="" required="required">
            <option selected>Cuautitlán</option>
            <option>Cuautitlán Izcalli</option>
            <option>Melchor Ocampo</option>
            <option>Tepotzotlan</option>
            <option>Tultepec</option>
            <option>Tultitlan</option>
            <option>Zumpango</option>
          </select><br><br>
          Colonia:<br>
          <input type="text" name="" value="" required="required"><br><br>
          Codigo Postal (C.P.):<br>
          <input type="text" name="" value="" required="required" ondragover=""><br><br>
          Calle:<br>
          <input type="text" name="" value="" required="required  "><br><br>
          Numero Exterior:<br>
          <input type="text" name="" value="" required="required"><br><br>
          Numero interior:<br>
          <input type="text" name="" value="" required="required"><br><br>
          Telefono celular:<br>
          <input type="text" name="" value="" required="required"><br><br>
          Telefono local:<br>
          <input type="text" name="" value="">

          </center>
          <br><br>
        </div>
        <br>
        <div class="ultimos-datos">
          <br>
          <center>
            <h4>Datos de Acceso</h4>

            Nombre de usuario:<br>
            <input type="text" required="required" name="" value=""><br><br>
            Contraseña nueva:<br>
            <input type="password" name="" required="required" value=""><br><br>


            <br><br>
          </center>
        </div>
        <div class="ultimos-datos">
          <br>
          <center>
            <h4>Datos de seguridad</h4>
            Ingresa estos datos para poder modificar los datos de tu cuenta <br><br>

            Contraseña:<br>
            <input type="password" name="" required="required" value=""><br><br>
            Confirmar contraseña:<br>
            <input type="password" name="" value="" required="required"><br><br><br>
            <a class="boton_personalizado" href="#">Modificar</a>
            <br><br>
          </center>
        </div>
        <br><br>
      </div>





    </div>
  </body>
</html>
