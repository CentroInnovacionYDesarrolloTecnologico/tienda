<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> Mi cuenta Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
    <body>
    <?php
        session_start();
        $uss=$_SESSION['adminLog'];
      include("barras.php");
    $query= "Select * from negocios where idnegocio=".$uss.";";
    $resul= mysqli_query($mysqli,$query);
    while($row=mysqli_fetch_array($resul)){

        $NombreRN=$row['NombreRN'];
        echo $NombreRN;
        $ApaternoRN=$row['ApaternoRN'];
        echo $ApaternoRN;
        $AmaternoRN=$row['AmaternoRN'];
        echo $AmaternoRN;
        $Fnacrn=$row['FnacRN'];
        echo $Fnacrn;
        $NNegocio=$row['NNegocio'];
        echo $NNegocio;
        $ColoniaN=$row['ColoniaN'];
        echo $ColoniaN;
        $CP=$row['CP'];
        echo $CP;
        $Calle=$row['Calle'];
        echo $Calle;
        $TcelN=$row['TcelN'];
        echo $TcelN;
        $TcasaN=$row['TcasaN'];
        echo $TcelN;
        $PasswordN=$row['PasswordN'];
        echo $PasswordN;
        $Estado=$row['Estado'];
        echo $Estado;
        $gir_neg=$row['Razon'];
        echo $gir_neg;
        $munn_negg=$row['Municipio'];
        echo $munn_negg;

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
    ?>

        <div class="cuenta">
            <form method="POST" action="modificar.php">
                <h1>Mi cuenta</h1>
            &emsp;&emsp;&emsp;&emsp;En esta seccion podras visualizar y modificar los datos de tu negocio, te recomendamos que no alteres los campos para no dañar tu posici&oacute;n dentro del sistema
            <div class="Formulario-cuenta">
                    <h4>DATOS PERSONALES</h4>
                    Nombre (s):
                    <input type="text" name="htNombreA" value="<?php echo $NombreRN;?> " size="25" required="required"> Apellido paterno:
                    <input type="text" name="htApellidopB" value="<?php echo $ApaternoRN;?>" size="25" required="required"> Apellido materno:
                    <input type="text" name="htApellidomC" value="<?php echo $AmaternoRN;?>" size="25" required="required"> Fecha de nacimiento:
                    <input type="date" name="fnac" value="<?php echo $FnacRN;?>" required="required">
            </div>
            <div class="Formulario-negocio">
                    <h4>Datos del negocio</h4>
                    Nombre del negocio:
                    <input type="text" name="nom_negc" value="<?php echo $NNegocio;?>" required="required">  Giro:
                    <select class="Giro" name="Giro" required="required">
            <option <?php echo $Aba; ?> value="Abarrotes">Abarrotes</option>
            <option <?php echo $Com; ?> value="Comida">Comida</option>
            <option <?php echo $Farm; ?> value="Farmacia">Farmacia</option>
            <option <?php echo $Flor; ?> value="Flores">Flores</option>
            <option <?php echo $Otro; ?> value="Otro">Otro</option>
          </select>
                Estado:
                    <input class="Estado" name="est_negc" value="<?php echo $Estado;?>" type="text" required="required">
            Municipio:

                    <select class="Municipio" name="Municipio" required="required">
            <option<?php echo $C; ?>value="Cuautitlan">Cuautitlán</option>
            <option<?php echo $CI; ?>value="CIzcalli">Cuautitlán Izcalli</option>
            <option<?php echo $MO; ?> value="Melchor">Melchor Ocampo</option>
            <option<?php echo $Tpo; ?> value="Tepotzotlan">Tepotzotlan</option>
            <option<?php echo $Tulte; ?> value="Tultepec">Tultepec</option>
            <option<?php echo $Tulti; ?> value="Tultitlan">Tultitlan</option>
            <option<?php echo $Zum; ?> value="Zumpango">Zumpango</option>
          </select> Colonia:

                    <input type="text" name="colo_negc" value="<?php echo $ColoniaN; ?>" required="required"> Codigo Postal (C.P.):
                    <input type="text" name="cpp_negc" value="<?php echo $CP; ?>" required="required" ondragover=""> Calle:
                    <input type="text" name="call_negc" value="<?php echo $Calle;?>" required="required  "> Telefono celular:
                    <input type="text" name="tell_negc" value="<?php echo $TcelN;?>" required="required">Telefono local:
                    <input type="text" name="telm_negc" value="<?php echo $TcasaN;?>";>
            </div>
            <div class="Formulario-cuenta">
                    <h4>Datos de Acceso</h4>
                    Correo:
                    <input type="text" required="required" name="Correo" value="">Contraseña nueva:
                    <input type="password" name="" required="required" value="">
            </div>
            <div class="Formulario-seguridad">
                    <h4>Datos de seguridad</h4>
                    Ingresa estos datos para poder modificar los datos de tu cuenta  Contraseña:
                    <input name="pass_negc" type="password" required="required" value="<?php echo $PasswordN;?>">Confirmar contraseña:
                    <input type="password" name="" value="<?php echo $PasswordN;?>" required="required">
                    <a class="boton_personalizado" href="#"><button>Modificar</button></a>
            </div>
        </form>
    </div>
</body>
</html>
