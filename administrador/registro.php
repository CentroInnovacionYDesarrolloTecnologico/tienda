<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    </head>
    <body>
    <?php
       require("conexion.php");
    ?>
    <div class="barra-superior">
    <div class="titulo">
        <h1>PATIYOTL</h1>
    </div>
</div>
    <div class="Registro">
        <form method="POST" action="accion-regisrep.php">
            <h1>Registro de negocio</h1>
            Ingresa los datos que se te piden de manera correcta para poder realizar tu registro
            <div class="datos-personales-registro">
                <h4>DATOS PERSONALES</h4>
                <h5>Ingresa tus datos personales de manera correcta</h5>
                Nombre (s):
                <input type="text" name="nom_due" value="" size="25" required="required">
                Apellido paterno:
                <input type="text" name="ap_due" value="" size="25" required="required">
                Apellido materno:
                <input type="text" name="am_due" value="" size="25" required="required">
                fecha de nacimiento:
                <input type="date" name="naci_due" value="" required="required">
            </div>
            <div class="datos-negocio-registro">
                <h4>Datos del negocio</h4>
                <h5>Ingresa los datos principales de tu negocio de manera correcta</h5>
                Nombre del negocio:
                <input type="text" name="nom_neg" value="" required="required">
                Giro:
                <select class="Giro" name="giro_neg"  required="required">
                    <option selected>Abarrotes</option>
                    <option>Comida</option>
                    <option >Farmacia</option>
                    <option>Flores</option>
                    <option>Otro</option>
                </select>
                Estado:
                <select class="Estado" name="est_neg" required="required">
                    <option>Aguascalientes</option><option>Baja California</option><option>Baja California Sur</option><option>Campeche</option>
                    <option>Chiapas</option><option>Chihuahua</option><option>Ciudad de México</option><option>Coahuila</option>
                    <option>Colima</option><option>Durango</option><option>Guanajuato</option><option>Guerrero</option><option>Hidalgo</option>
                    <option>Jalisco</option><option selected>México</option><option>Michoacan</option><option>Morelos</option>
                    <option>Nayarit</option><option>Nuevo León</option><option>Oaxaca</option><option>Puebla</option><option>Queretaro</option>
                    <option>Quintana Roo</option><option>San Luis Potosi</option><option>Sinaloa</option><option>Sonora</option>
                    <option>Tabasco</option><option>Tamaulipas</option><option>Tlaxcala</option><option>Veracruz</option><option>Yucatán</option>
                    <option>Zacatecas</option>
                </select>
                Municipio:
                <select class="Municipio" name="muni_neg" required="required">
                    <option selected>Cuautitlán</option>
                    <option>Cuautitlán Izcalli</option>
                    <option>Melchor Ocampo</option>
                    <option>Tepotzotlan</option>
                    <option>Tultepec</option>
                    <option>Tultitlan</option>
                    <option>Zumpango</option>
                </select>
                Colonia:
                <input type="text" name="colo_neg" value="" required="required">
                Codigo Postal (C.P.):
                <input type="text" name="cpp_neg" value="" required="required" >
                Calle:
                <input type="text" name="call_neg" value="" required="required  ">
                Numero Exterior:
                <input type="text" name="numex_neg" value="" required="required">
                Numero interior:
                <input type="text" name="numin_neg" value="" required="required">
                Telefono celular:
                <input type="text" name="telm_neg" value="" required="required">
                Telefono local:
                <input type="text" name="tell_neg" required="required" value="">

            </div>
            <div class="ultimos-datos">

                <h4>Ultimos Datos</h4>
                <h5>Ingresa los datos de seguridad de tu cuenta</h5>
                Correo electronico:
                <input type="text" name="corr_neg" value="" required="required">
                Nombre de usuario:
                <input type="text" required="required" name="usu_neg" value="">
                Contraseña:
                <input type="password" id="contra1" name="pass_neg" required="required" value="">
                Confirmar contraseña:
                <input  onkeyup="validar_contras()" type="password"  id="contra2" name="passc_neg" value="" required="required">



                <input class="ex" id="paso" type="submit" value="Registrar"/>
                <input id="posicionX" type="hidden"/>
                <input id="posicionY" type="hidden"/>

            </div>
                           <div id="map"></div>
                            <?php
    //$lat=19.708458;
    //$lng=-99.073240;
     echo '<script>
      function initMap() {
        var uluru = {lat:-34.397,lng:150.644};
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: uluru
        });
        var infoWindow = new google.maps.InfoWindow({map: map});
        if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function(position){
        var pos = {
        lat:position.coords.latitude,
        lng:position.coords.longitude
        };
        infoWindow.setPosition(pos);
        infoWindow.setContent("Location found.");
        map.setCenter(pos);
        }, function(){
        handleLocationError(true,infoWindow, map.getCenter());
        });
        }else{
        handleLocationError(false,infoWindow, map.getCenter());
        }
              function onEnviar(){
      document.getElementById("posicionX").value=uluru[lat];
      document.getElementById("posicionY").value=uluru[lng];
      }
      }
    </script>';
    ?>
        </form>
    </div>
    </body>
</html>
