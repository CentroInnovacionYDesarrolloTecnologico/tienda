<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <style type="text/css">
        input {
            display: block;
            margin-top: 2%;
            margin-bottom: 2%;
        }

        select {
            display: block;
            margin-top: 2%;
            margin-bottom: 2%;
        }
    </style>
</head>

<body>
    <?php
       require("conexion.php");
    ?>
        <div class="barra-superior">
            <div class="titulo">
                <h1>
                    <img src="img/2.png" />
                </h1>
            </div>
        </div>
        <br>
        <a href="login.php" class="btn-a">Volver a inicio de sesi&oacute;n</a>
        <div class="Registro">
            <form method="POST" action="accion-regisrep.php">
                <h1>Registro de Negocio</h1>
                Ingresa los datos que se te piden de manera correcta para poder realizar tu registro
                <div class="datos-personales-registro">
                    <div class="datos-negocio-registro">
                    <h4>Datos del Negocio</h4>
                    <h5>Ingresa los datos principales de tu negocio de manera correcta</h5>
                    Nombre del negocio:
                    <input type="text" name="nom_neg" value="" required="required"> Giro:
                    <select class="Giro" name="giro_neg" required="required">
                    <option selected>Abarrotes</option>
                    <option>Comida</option>
                    <option >Farmacia</option>
                    <option>Flores</option>
                    <option>Otro</option>
                </select> Estado:
                    <select class="Estado" name="est_neg" required="required">
                    <!--<option>Aguascalientes</option><option>Baja California</option><option>Baja California Sur</option><option>Campeche</option>
                    <option>Chiapas</option><option>Chihuahua</option><option>Ciudad de México</option><option>Coahuila</option>
                    <option>Colima</option><option>Durango</option><option>Guanajuato</option><option>Guerrero</option><option>Hidalgo</option>
                    <option>Jalisco</option>--><option selected>México</option><!--<option>Michoacan</option><option>Morelos</option>
                    <option>Nayarit</option><option>Nuevo León</option><option>Oaxaca</option><option>Puebla</option><option>Queretaro</option>
                    <option>Quintana Roo</option><option>San Luis Potosi</option><option>Sinaloa</option><option>Sonora</option>
                    <option>Tabasco</option><option>Tamaulipas</option><option>Tlaxcala</option><option>Veracruz</option><option>Yucatán</option>
                    <option>Zacatecas</option>-->
                </select> Municipio:
                    <select class="Municipio" name="muni_neg" required="required">
                    <option selected>Cuautitlán</option>
                </select> Colonia:
                    <?php
        $query2="SELECT Idcolonia, Nombreco from colonias;";
        $resul2= mysqli_query($mysqli,$query2);
                echo'<select name="Duo" required="required">
                <option>Selecciona tu colonia</option>';
        while($row=mysqli_fetch_array($resul2)){
            $NomCol=$row['1'];
            $idColonia=$row['0'];
                echo '<option value="'.$idColonia.'">'.$NomCol.'</option>';
        }
                echo'</select>';
                    ?>
                        Calle:
                        <input type="text" name="call_neg" value="" required="required  "> Telefono celular:
                        <input type="text" name="telm_neg" value="" required="required" id="cel" onkeypress="return valida(event)"> Telefono local:
                        <input type="text" name="tell_neg" required="required" value="" id="fijo" onkeypress="return valida(event)">

                </div>
                   <hr>
                    <h4>Datos Personales</h4>
                    <h5>Ingresa tus datos personales de manera correcta</h5>
                    Nombre (s):
                    <input type="text" name="nom_due" value="" size="25" required="required" onkeypress="return validados(event)"> Apellido paterno:
                    <input type="text" name="ap_due" value="" size="25" required="required" onkeypress="return validados(event)"> Apellido materno:
                    <input type="text" name="am_due" value="" size="25" required="required" onkeypress="return validados(event)"> Fecha de nacimiento:
                    <input type="date" name="naci_due" value="" required="required">
                </div>
                <hr>
                <div class="ultimos-datos">
                    <h4>Datos de Acceso</h4>
                    <h5>Ingresa los datos de seguridad para tu cuenta</h5>
                    Correo electronico:
                    <input onkeyup="validar_contras()" type="text" name="corr_neg" id="corr_neg" value="" required="required"> Confirma tu correo electronico
                    <input onkeyup="validar_contras()" type="text" id="corr_conf" value="" required="required"> Contraseña:
                    <input onkeyup="validar_contras() " type="password" id="contra1" name="pass_neg" required="required" value=""> Confirmar contraseña:
                    <input onkeyup="validar_contras()" type="password" id="contra2" name="passc_neg" value="" required="required">
                    <hr>
                    <h4>Ubicaci&oacute;n</h4>
                    <div id="map"></div>
                    <input id="posicionX" name="posicionX" type="hidden" />
                    <input id="posicionY" name="posicionY" type="hidden" />

                </div>

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
         document.getElementById("posicionX").value=position.coords.latitude;
        document.getElementById("posicionY").value=position.coords.longitude;
        }, function(){
        handleLocationError(true,infoWindow, map.getCenter());
        });
        }else{
        handleLocationError(false,infoWindow, map.getCenter());
        }
      }
    </script>';
    ?>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyDfSF9yM5sBO3PdlJ3yxWwh0lFHGReENcQ
&callback=initMap">
                    </script>

                    <input id="paso" class="ex" type="submit" value="Registrar" disabled="disabled" />
                    <?php
				echo '<span style="color:red"><b id="adver"></b></span>';
					/*
					Usuario: No espacios
					Nombre: No numeros,
					Apellidos: No numeros, no espacios
					Contraseña: 8-16, una mayuscula, no espacio, un numero
					Confirmacion contraseñas
					Fecha de mayoria de edad
					*/
					?>
            </form>
        </div>
        <script>
            var clv1 = document.getElementById("contra1").value;
            var cantidad = clv1.length;
            var clv2 = document.getElementById("contra2").value;
            var clv10 = document.getElementById("corr_neg").value;
            var clv20 = document.getElementById("corr_conf").value;
            var enter = document.getElementById("paso");
            enter.setAttribute("disabled", "disabled");

            function validar_contras() {
                var ad = document.getElementById("adver").value;
                var clv1 = document.getElementById("contra1").value;
                var cantidad = clv1.length;
                var clv2 = document.getElementById("contra2").value;
                var clv10 = document.getElementById("corr_neg").value;
                var clv20 = document.getElementById("corr_conf").value;
                var enter = document.getElementById("paso");
                if (clv1 == clv2 && cantidad >= 8 && cantidad <= 16 && clv10 == clv20) {
                    enter.removeAttribute("disabled");
                    ad = "";
                } else {
                    enter.setAttribute("disabled", "disabled");
                    ad = "Datos erroneos:"
                    document.getElementById('adver').innerHTML = ad;
                }
                if (cantidad < 8) {
                    ad = ad + "<?php echo '<p>Contraseña no valida ( Debe ser mayor a 8 caracteres)</p>'; ?>";
                    document.getElementById('adver').innerHTML = ad;
                } else {
                    ad = ad;
                    document.getElementById('adver').innerHTML = ad;
                }
                if (cantidad > 16) {
                    ad = ad + "<?php echo '<p>Contraseña no valida( Debe ser menor a 16 caracteres)</p>'; ?>";
                    document.getElementById('adver').innerHTML = ad;
                } else {
                    ad = ad;
                    document.getElementById('adver').innerHTML = ad;
                }
                if (clv1 !== clv2) {
                    ad = ad + "<?php echo '<p>Las contraseñas son diferentes </p>'; ?>";
                    document.getElementById('adver').innerHTML = ad;
                } else {
                    ad = ad;
                    document.getElementById('adver').innerHTML = ad;
                }
                if (clv10 !== clv20) {
                    ad = ad + "<?php echo '<p>Los correos no son los mismos </p>';?>";
                    document.getElementById('adver').innerHTML = ad;
                } else {
                    ad = ad;
                    document.getElementById('adver').innerHTML = ad;
                }

            }
        </script>
        <script>
            function valida(e) {
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla == 8) {
                    return true;
                }

                patron = /[0-9]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
            }
            var input = document.getElementById('cel');
            input.addEventListener('input', function() {
                if (this.value.length > 10)
                    this.value = this.value.slice(0, 10);
            })
            var input = document.getElementById('fijo');
            input.addEventListener('input', function() {
                if (this.value.length > 8)
                    this.value = this.value.slice(0, 8);
            })
        </script>
        <script>
            function validados(f) {
                tecla = (document.all) ? f.keyCode : f.which;
                if (tecla == 8) {
                    return true;
                }
                if (tecla == 32) {
                    return true;
                }
                if (tecla == 209) {
                    return true;
                }
                if (tecla >= 192 && tecla <= 255) {
                    return true;
                }
                patron = /[A-Za-z]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
            }
        </script>
</body>

</html>
