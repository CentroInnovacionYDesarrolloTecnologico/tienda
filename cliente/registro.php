<html>

<head>
    <title>
        Inicia Sesi&oacute;n - CecyEmprende
    </title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
        select{
            margin-top: 3%;
            margin-bottom: 3%;
        }
    </style>
</head>

<body>
    <?php
            include ("barras.php");
    
        ?>
        <div class="contenido">
            <div class="modal_registro">
                <form method="POST" action="accion_registro.php">
                    <label>
						Usuario:
					</label>
                    <input name="usu" type="text" required="required" />

                    <label>
						Nombre:
					</label>
<<<<<<< HEAD

                    <input id="nombre_usu" name="nom" type="text" required="required" onkeypress="return validados(event)"/>

                    <label>
						Apellido paterno:
					</label>
                    <input name="app" type="text" required="required" onkeypress="return validados(event)"/>
=======
                    <input id="nombre_usu" name="nom" type="text" required="required" />

                    <label>
						Apellido paterno:
					</label>
                    <input name="app" type="text" required="required" />
>>>>>>> origin/master

                    <label>
						Apellido materno:
					</label>
<<<<<<< HEAD
                    <input name="apm" type="text" required="required" onkeypress="return validados(event)"/>
=======
                    <input name="apm" type="text" required="required" />
>>>>>>> origin/master

                    <label>
                        Fecha de nacimiento:
                    </label>
                    <input type="date" name="fecha" required="required" />
                    <label>
                        Sexo:
                    </label>
                    <select name="sexo" required="required"style="display:block;">
                        <option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
                    </select>
                    <label>
                        Colonia
                    </label>
<<<<<<< HEAD
                    <select name="CP" required="required" style="display:block;">
                        <option value="1" >Hacienda Cuautitlan</option>
                    </select>
                    <label>
                        Telefono celular
                    </label>
                    <input type="number" id="cel" name="celular" required="required" onkeypress="return valida(event)"  />
                    <label>
                        Telefono Fijo
                    </label>
                    <input type="number" name="fijo" id="fijo" required="required" onkeypress="return valida(event)"/>
=======
                    <input type="number" name="CP" required="required" />
                    <label>
                        Telefono celular
                    </label>
                    <input type="number" name="celular" required="required" />
                    <label>
                        Telefono Fijo
                    </label>
                    <input type="number" name="fijo" required="required" />
>>>>>>> origin/master
                    <label>   
						Correo electronico:
					</label>
                    <input onkeyup="validar_contras()" id="c_e" name="c_e" type="text" required="required" />

                    <label>
						Confirma tu correo electronico:
					</label>
                    <input onkeyup="validar_contras()" id="c_e_e" name="c_e_c" type="text" required="required" />

<<<<<<< HEAD
                    <label id="contras1">
=======
                    <label>
>>>>>>> origin/master
						Contrase&ntilde;a:
					</label>
                    <input onkeyup="validar_contras()" id="contra1" name="cont" type="password" required="required" />

                    <label>
						Confirma tu contrase&ntilde;a:
					</label>
                    <input onkeyup="validar_contras()" id="contra2" name="confirm" type="password" required="required" />
                                    <div id="map"></div>
                    <input id="posicionX" name="posicionX" type="hidden"/>
                    <input id="posicionY" name="posicionY" type="hidden"/>
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
<<<<<<< HEAD
        document.getElementById("posicionX").value=position.coords.latitude;
        document.getElementById("posicionY").value=position.coords.longitude;
=======
>>>>>>> origin/master
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
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyDfSF9yM5sBO3PdlJ3yxWwh0lFHGReENcQ
&callback=initMap">
<<<<<<< HEAD
=======


>>>>>>> origin/master
                    </script>

                    <input id="paso" class="ex" type="submit" value="Guardar datos" disabled="disabled" />
                    <?php
						echo '<span style="color:red"><b>Datos erroneos</b></span>';
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

                    <span>
					¿Ya tienes una cuenta?
					<a href="login.php">
						Inicia sesi&oacute;n
					</a>
				</span>
            </div>
        </div>
        <script>
            var clv1 = document.getElementById("contra1").value;
            var cantidad = clv1.length;
<<<<<<< HEAD
            var cantidad2= clv2.lenght;
=======
>>>>>>> origin/master
            var clv2 = document.getElementById("contra2").value;
            var clv10 = document.getElementById("c_e").value;
            var clv20 = document.getElementById("c_e_e").value;
            var enter = document.getElementById("paso");
            var nombre = document.getElementById("nombre_us");
            enter.setAttribute("disabled", "disabled");
<<<<<<< HEAD
            function validar_contras() {
                var ad = document.getElementById("adver").value;
=======

>>>>>>> origin/master
        </script>
        <script>
            function validacion_usuario() {

            }

            function validar_contras() {
                var clv1 = document.getElementById("contra1").value;
                var cantidad = clv1.length;
                var clv2 = document.getElementById("contra2").value;
                var clv10 = document.getElementById("c_e").value;
                var clv20 = document.getElementById("c_e_e").value;
                var enter = document.getElementById("paso");
                if (clv1 == clv2 && cantidad >= 8 && cantidad <= 16 && clv10 == clv20) {
                    enter.removeAttribute("disabled");
<<<<<<< HEAD
                    ad="";
                } else {
                    enter.setAttribute("disabled", "disabled");
                    ad="Datos erroneos:"
                document.getElementById('adver').innerHTML=ad;
                }
                if(cantidad<8){
                   ad=ad+"<?php echo '<p>Contraseña no valida ( Debe ser mayor a 8 caracteres)</p>'; ?>"; document.getElementById('adver').innerHTML=ad;
                }
                else{
                    ad=ad;
                document.getElementById('adver').innerHTML=ad;
                }
                if(cantidad>16){
                   ad=ad+"<?php echo '<p>Contraseña no valida( Debe ser menor a 16 caracteres)</p>'; ?>";  document.getElementById('adver').innerHTML=ad;
                }
                                else{
                    ad=ad;
                document.getElementById('adver').innerHTML=ad;
                }
                if(clv1 !== clv2){
                ad=ad+"<?php echo '<p>Las contraseñas son diferentes </p>'; ?>";  document.getElementById('adver').innerHTML=ad;
                }
                                else{
                    ad=ad;
                document.getElementById('adver').innerHTML=ad;
                }
                if(clv10!==clv20){
                   ad=ad+"<?php echo '<p>Los correos no son los mismos </p>';?>";
                document.getElementById('adver').innerHTML=ad;
                }
                                else{
                    ad=ad;
                document.getElementById('adver').innerHTML=ad;
                }

            }
        </script>
        <script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
var input=  document.getElementById('cel');
input.addEventListener('input',function(){
  if (this.value.length > 10)
     this.value = this.value.slice(0,10);
})
var input=  document.getElementById('fijo');
input.addEventListener('input',function(){
  if (this.value.length > 8)
     this.value = this.value.slice(0,8);
})

</script>
<script>
    function validados(f){
        tecla = (document.all) ? f.keyCode : f.which;
        if(tecla==8){
            return true;
        }
                    if (tecla==32){
        return true;
    }
            if(tecla==209){
                return true;
            }
            if(tecla>=192 && tecla<=255){
                return true;
            }
        patron=/[A-Za-z]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
    </script>
=======
>>>>>>> origin/master
                } else {
                    enter.setAttribute("disabled", "disabled");
                }
            }

        </script>
</body>

</html>
