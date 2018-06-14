<html>

<head>
    <title>
        Inicia Sesi&oacute;n - Patiyotl
    </title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        select {
            margin-top: 3%;
            margin-bottom: 3%;
        }

    </style>
</head>

<body>
    <?php
    include ("barras.php");
    $uss=$_SESSION['usrcnf'];
    $query= "Select * from usuarios where idusuario=".$uss.";";
    $resul=mysqli_query($mysqli,$query);
    while($row=mysqli_fetch_array($resul)){

        $NombreU=$row['Nombres'];
        $CorreoU=$row['CorreoU'];
        $ApaternoU=$row['ApaternoU'];
        $AmaternoU=$row['AmaternoU'];
        $FnacU=$row['FnacU'];
        $TcelU=$row['TcelularU'];
        $TcasaU=$row['TcasaU'];
        $Estado=$row['Estado'];
        $Municipio=$row['Municipio'];
        $ColoniaU=$row['idColonia'];
        $Usuario=$row['Usuario'];
    }

?>
        <div class="contenido">
            <div class="modal_registro">
                <form method="post" action="accion_modificar.php">
                    <label>
						Usuario:
					</label>
                    <input name="usu" type="text" required="required" value="<?php echo $Usuario;?>" />

                    <label>
						Nombre:
					</label>
                    <input id="nombre_usu" name="nom" type="text" required="required" onkeypress="return validados(event)" value="<?php echo $NombreU; ?>" />

                    <label>
						Apellido paterno:
					</label>
                    <input name="app" type="text" required="required" onkeypress="return validados(event)" value="<?php echo $ApaternoU;?>" />

                    <label>
						Apellido materno:
					</label>
                    <input name="apm" type="text" required="required" onkeypress="return validados(event)" value="<?php echo $AmaternoU;?>" />

                    <label>
                        Fecha de nacimiento:
                    </label>
                    <input type="date" name="fecha" required="required" value="<?php echo $FnacU;?>" />
                    <label>
                        Sexo:
                    </label>
                    <select name="sexo" required="required" style="display:block;">
                        <option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
                    </select>
                    <label>
                        Colonia
                    </label>
                    <?php
        $query2="SELECT * from colonias;";
        $resul2= mysqli_query($mysqli,$query2);
                    echo '<select name="CP" required="required" style="display:block;">
                    <option>Selecciona tu colonia</option>';
                    while($row=mysqli_fetch_array($resul2)){
                    $NomCol=$row['Nombreco'];
                    $idColonia=$row['idColonia'];
                echo '<option value="'.$idColonia.'">'.$NomCol.'</option>';
        }
                echo'</select>';
                    ?>
                        <label>
                        Telefono celular
                    </label>
                        <input type="number" id="cel" name="celular" required="required" onkeypress="return valida(event)" value="<?php echo $TcelU;?>" />
                        <label>
                        Telefono Fijo
                    </label>
                        <input type="number" name="fijo" id="fijo" required="required" onkeypress="return valida(event)" value="<?php echo $TcasaU;?>" />
                        <label>
						Correo electronico:
					</label>
                        <input onkeyup="validar_contras()" id="c_e" name="c_e" type="text" required="required" />

                        <label id="contras1">
						Contrase&ntilde;a:
					</label>
                        <input onkeyup="validar_contras()" id="contra3" name="cont2" type="password" required="required" /> Nueva contrase&ntilde;a:
                        </label>
                        <input onkeyup="validar_contras()" id="contra1" name="cont" type="password" required="required" />
                        <label>
						Confirma tu nueva contrase&ntilde;a:
					</label>
                        <input onkeyup="validar_contras()" id="contra2" name="confirm" type="password" required="required" />
                        <div id="map"></div>
                        <input id="posicionX" name="posicionX" type="hidden" />
                        <input id="posicionY" name="posicionY" type="hidden" />

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
        pos = {
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

                            <input id="paso" class="ex" type="submit" value="Guardar datos" disabled="disabled" />
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
            var cantidad2 = clv2.lenght;
            var clv2 = document.getElementById("contra2").value;
            var clv10 = document.getElementById("c_e").value;
            var clv20 = document.getElementById("c_e_e").value;
            var enter = document.getElementById("paso");
            var nombre = document.getElementById("nombre_us");
            enter.setAttribute("disabled", "disabled");

            function validar_contras() {
                var ad = document.getElementById("adver").value;
                var clv1 = document.getElementById("contra1").value;
                var cantidad = clv1.length;
                var clv2 = document.getElementById("contra2").value;
                var enter = document.getElementById("paso");
                if (clv1 == clv2 && cantidad >= 8 && cantidad <= 16) {
                    enter.removeAttribute("disabled");
                    ad = "";
                } else {
                    enter.setAttribute("disabled", "disabled");
                    ad = "Datos erroneos:";
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
