<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Mi cuenta Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
    <?php
      include("barras.php");
    $uss=$_SESSION['adminLog'];
    $query= "Select * from negocios where idnegocio=".$uss.";";
    $resul= mysqli_query($mysqli,$query);
    while($row=mysqli_fetch_array($resul)){

        $NombreRN=$row['NombreRN'];
        $ApaternoRN=$row['ApaternoRN'];
        $AmaternoRN=$row['AmaternoRN'];
        $Fnacrn=$row['FnacRN'];
        $NNegocio=$row['NNegocio'];
        $ColoniaN=$row['idColonia'];
        $Calle=$row['Calle'];
        $TcelN=$row['TcelN'];
        $TcasaN=$row['TcasaN'];
        $PasswordN=$row['PasswordN'];
        $Estado=$row['Estado'];
        $gir_neg=$row['Razon'];
        $munn_negg=$row['Municipio'];


        $C="";
        echo $C;
        $CI="";
        echo $CI;
        $MO="";
        echo $MO;
        $Tpo="";
        echo $Tpo;
        $Tulte="";
        echo $Tulte;
        $Tulti="";
        echo $Tulti;
        $Zum="";
        echo $Zum;
        $Aba="";
        echo $Aba;
        $Com="";
        echo $Com;
        $Farm="";
        echo $Farm;
        $Flor="";
        echo $Flor;
        $Otro="";
        echo $Otro;
    switch($munn_negg){
            case "Cuautitlan":

                $C='selected="selected"';
                $CI="";
                $MO="";
                $Tpo="";
                $Tulte="";
                $Tulti="";
                $Zum="";
                break;
            case "CIzcalli":
                $C="";
                $CI='selected="selected"';
                $MO="";
                $Tpo="";
                $Tulte="";
                $Tulti="";
                $Zum="";
                break;
            case "Melchor":
                $MO='selected="selected"';
                $C="";
                $CI="";
                $Tpo="";
                $Tulte="";
                $Tulti="";
                $Zum="";
                break;
            case "Tepotzotlan":
                $C="";
                $CI="";
                $MO="";
                $Tpo='selected="selected"';
                $Tulte="";
                $Tulti="";
                $Zum="";
                break;
            case "Tultepec":
                $Tulte='selected="selected"';
                $C="";
                $CI="";
                $MO="";
                $Tpo="";
                $Tulti="";
                $Zum="";
                break;
            case "Tultitlan":
                $Tulti='selected="selected"';
                $C="";
                $CI="";
                $MO="";
                $Tpo="";
                $Tulte="";
                $Zum="";
                break;
            case "Zumpango":
                $Zum='selected="selected"';
                $C="";
                $CI="";
                $MO="";
                $Tpo="";
                $Tulte="";
                $Tulti="";
                break;

        }
        switch($gir_neg){
                case "Abarrotes";
                $Aba='selected="selected"';
                $Com="";
                $Farm="";
                $Flor="";
                $Otro="";
                break;
                case "Comida";
                $Aba="";
                $Farm="";
                $Flor="";
                $Otro="";
                $Com='selected="selected"';
                break;
                case "Farmacia";
                $Aba="";
                $Com="";
                $Flor="";
                $Otro="";
                $Farm='selected="selected"';
                break;
                case "Flores";
                $Flor='selected="selected"';
                $Aba="";
                $Com="";
                $Farm="";
                $Otro="";
                break;
                case "Otro";
                $Aba="";
                $Com="";
                $Farm="";
                $Flor="";
                $Otro='selected="selected"';
                break;
        }
      }
        $query2="SELECT * from colonias where idColonia=".$ColoniaN.";";
        $resul2= mysqli_query($mysqli,$query2);
        while($row=mysqli_fetch_array($resul2)){
            $NomCol=$row['Nombreco'];
        }
    ?>

        <div class="cuenta">
            <form method="POST" action="modificar.php" class="formu_cuenta">
                <h1>Mi cuenta</h1>
                <div class="Formulario-negocio">
                    <h4>Datos del negocio</h4>
                    <label>Nombre del negocio:</label>
                    <input type="text" name="nom_negc" value="<?php echo $NNegocio;?>" required="required">
                    <label>Giro:</label>
                    <select class="Giro" name="Giro" required="required">
                        <option <?php echo $Aba; ?> value="Abarrotes">Abarrotes</option>
                        <option <?php echo $Com; ?> value="Comida">Comida</option>
                        <option <?php echo $Farm; ?> value="Farmacia">Farmacia</option>
                        <option <?php echo $Flor; ?> value="Flores">Flores</option>
                        <option <?php echo $Otro; ?> value="Otro">Otro</option>
                    </select>
                    <label>Estado:</label>
                    <input class="Estado" name="est_negc" value="<?php echo $Estado;?>" type="text" required="required"> <label>Municipio:</label>

                    <select class="Municipio" name="Municipio" required="required">
                        <option<?php echo $C; ?>value="Cuautitlan">Cuautitlán</option>
                        <option<?php echo $CI; ?>value="CIzcalli">Cuautitlán Izcalli</option>
                        <option<?php echo $MO; ?> value="Melchor">Melchor Ocampo</option>
                        <option<?php echo $Tpo; ?> value="Tepotzotlan">Tepotzotlan</option>
                        <option<?php echo $Tulte; ?> value="Tultepec">Tultepec</option>
                        <option<?php echo $Tulti; ?> value="Tultitlan">Tultitlan</option>
                        <option<?php echo $Zum; ?> value="Zumpango">Zumpango</option>
                    </select>
                    <label>Colonia:</label>
                    <?php
                        $query2="SELECT nombreco,idcolonia from colonias;";
                        $resul2= mysqli_query($mysqli,$query2);
                        echo'<select class="colonia" name="colo_negc" required="required">';
                        while($row=mysqli_fetch_array($resul2)){
                            $NomCol=$row[0];
                            $idColonia=$row[1];
                            echo '<option value="'.$idColonia.'">'.$NomCol.'</option>';
                        }
                        echo'</select>';
                    ?>
                    <label>Calle:</label>
                    <input type="text" name="call_negc" value="<?php echo $Calle;?>" required="required  ">
                    <label>Telefono celular:</label>
                    <input type="text" name="tell_negc" value="<?php echo $TcelN;?>" id="cel" onkeypress="valida(event)" required="required">
                    <label>Telefono local:</label>
                    <input type="text" name="telm_negc" value="<?php echo $TcasaN;?>" id="fijo" onkeypress="valida(event)">
                </div>
                <div class="Formulario-cuenta">
                    <h4>DATOS PERSONALES</h4>
                    <label>Nombre (s):</label>
                    <input type="text" name="htNombreA" value="<?php echo $NombreRN;?> " size="25" required="required" onkeypress="validados(event)">
                    <label>Apellido paterno:</label>
                    <input type="text" name="htApellidopB" value="<?php echo $ApaternoRN;?>" onkeypress="validados(event)" size="25" required="required">
                    <label>Apellido materno:</label>
                    <input type="text" name="htApellidomC" value="<?php echo $AmaternoRN;?>" onkeypress="validados(event)" size="25" required="required">
                    <label>Fecha de nacimiento:</label>
                    <input type="date" name="fnac" value="<?php echo $FnacRN;?>" required="required">
                </div>
                <div class="Formulario-cuenta">
                    <h4>Datos de Acceso</h4>
                    <label>Contrase&ntilde;a nueva:</label>
                    <input type="password" name="" value="" id="pass1">
                    <label>Confirma tu contraseña nueva:</label>
                    <input type="password" name="Correo" value="" id="pass2">
                    <span style="color:red;">
                        <strong>
                            <p id="adver2">

                            </p>
                        </strong>
                    </span>
                </div>
                <div class="Formulario-seguridad">
                    <h4>Validaci&oacute;n</h4>
                    Ingresa estos datos para poder modificar los datos de tu cuenta
                    <label>Contraseña:</label>
                    <input name="pass_negc" type="password" id="contra1" required="required" value="" onkeyup="validar_contras()">
                    <label>Confirmar contraseña:</label>
                    <input type="password" id="contra2" onkeyup="validar_contras()" name="" value="" required="required">
                    <span style="color:red;"><strong> <p id="adver"></p></strong></span>
                    <a class="boton_personalizado" href="#"><button id="paso" disabled="disabled">Modificar</button></a>
                </div>
            </form>
        </div>
        <script>
            var clv1 = document.getElementById("contra1").value;
            var clv2 = document.getElementById("contra2").value;
            var cantidad = clv1.length;
            var cantidad2 = clv2.length;
            var pass1 = document.getElementById("pass1").value;
            var cantidad3 = pass1.length;
            var pass2 = document.getElementById("pass2").value;
            var cantidad4 = pass2.length;
            var clv10 = document.getElementById("corr_neg").value;
            var clv20 = document.getElementById("corr_conf").value;
            var enter = document.getElementById("paso");
            var otrito = document.getElementById("otro");
            enter.setAttribute("disabled", "disabled");

            function revisar() {
                var girito = document.getElementById("giro").value;
                if (girito.localeCompare("Otro") == 0) {
                    otrito.removeAttribute("disabled");
                } else {
                    otrito.setAttribute("disabled", "disabled");
                }
            }

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
