<?php
	require("conexion.php");
?>
<html>
    <head>
        <title>Pruebas</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
       <?php
        include("Marinela.php");
        ?>
        
    
    <div class="Registro">
      <form method="POST" action="accion-regisrep.php">
          <center><h1>Registro de negocio</h1></center>
      &emsp;&emsp;&emsp;&emsp;<center>Ingresa los datos que se te piden de manera correcta para poder realizar tu registro</center>
      <div class="Datos-personales-registro"><br>
        <center> <h4>DATOS PERSONALES</h4>
          <h5>Ingresa tus datos personales de manera correcta</h5> <br>
         Nombre (s):<br>
        <input type="text" name="nom_due" value="" size="25" required="required"><br><br>
         Apellido paterno:<br>
        <input type="text" name="ap_due" value="" size="25" required="required"><br><br>
         Apellido materno:<br>
        <input type="text" name="am_due" value="" size="25" required="required"><br><br>
         fecha de nacimiento:<br>
         <input type="date" name="naci_due" value="" required="required">
         </center>
        <br><br><br>

      </div>
      <div class="datos-negocio-registro">
        <center><h4>Datos del negocio</h4>
        <h5>Ingresa los datos principales de tu negocio de manera correcta</h5> <br><br>
        Nombre del negocio:<br>
        <input type="text" name="nom_neg" value="" required="required"> <br><br>
        Giro:<br>
        <select class="Giro" name="giro_neg"  required="required">
          <option selected>Abarrotes</option>
          <option>Comida</option>
          <option >Farmacia</option>
          <option>Flores</option>
          <option>Otro</option>
        </select><br><br>
        Estado:<br>
        <select class="Estado" name="est_neg" required="required">
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
        <select class="Municipio" name="muni_neg" required="required">
          <option selected>Cuautitlán</option>
          <option>Cuautitlán Izcalli</option>
          <option>Melchor Ocampo</option>
          <option>Tepotzotlan</option>
          <option>Tultepec</option>
          <option>Tultitlan</option>
          <option>Zumpango</option>
        </select><br><br>
        Colonia:<br>
        <input type="text" name="colo_neg" value="" required="required"><br><br>
        Codigo Postal (C.P.):<br>
        <input type="text" name="cpp_neg" value="" required="required" ><br><br>
        Calle:<br>
        <input type="text" name="call_neg" value="" required="required  "><br><br>
        Numero Exterior:<br>
        <input type="text" name="numex_neg" value="" required="required"><br><br>
        Numero interior:<br>
        <input type="text" name="numin_neg" value="" required="required"><br><br>
        Telefono celular:<br>
        <input type="text" name="telm_neg" value="" required="required"><br><br>
        Telefono local:<br>
        <input type="text" name="tell_neg" required="required" value="">

        </center>
        <br><br>
      </div>
      <br>
      <div class="ultimos-datos">
        <br>
        <center>
          <h4>Ultimos Datos</h4>
          <h5>Ingresa los datos de seguridad de tu cuenta</h5><br>
          Correo electronico:<br>
          <input type="text" name="corr_neg" value="" required="required"><br><br>
          Nombre de usuario:<br>
          <input type="text" required="required" name="usu_neg" value=""><br><br>
          Contraseña:<br>
          <input type="password" id="contra1" name="pass_neg" required="required" value=""><br><br>
          Confirmar contraseña:<br>
          <input  onkeyup="validar_contras()" type="password"  id="contra2" name="passc_neg" value="" required="required"><br><br><br>
            
          <input class="ex" id="paso" type="submit" disabled="disabled" value="Registrar"/>
          <br><br>
        </center>
      </div>
      <br><br>
        </form>
    </div>
        <script>
            function validar_contras(){
                var clv1=document.getElementById("contra1").value;
                var clv2=document.getElementById("contra2").value;
                var enter=document.getElementById("paso");
                if(clv1==clv2){
                    enter.removeAttribute("disabled");
                   }else{
                    enter.setAttribute("disabled","disabled");
                   }
            }
        </script>

    </body>
</html>
        