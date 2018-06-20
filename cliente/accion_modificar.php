<?php
    require("conexion.php");
    session_start();
    $uss=$_SESSION['usrcnf'];
    $Usuario=$_POST['usu'];
    $Nombre=$_POST['nom'];
    $ap_duen=$_POST['app'];
    $am_duen=$_POST['apm'];
    $Fecha=$_POST['fecha'];
    $sexo=$_POST['sexo'];
    $est_nneg='Mexico';
    $munn_neg='Cuautitlan';
    $colonia=$_POST['CP'];
    $telcel=$_POST['celular'];
    $telfijo=$_POST['fijo'];
    $corr_negg=$_POST['c_e'];
    $rangoy=$_POST['posicionY'];
    $rangox=$_POST['posicionX'];
    $sexo=$_POST['sexo'];
	$pass=password_hash($_POST['cont'],PASSWORD_DEFAULT);
    $passant=password_hash($_POST['cont2'],PASSWORD_DEFAULT);
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
        $sel2="SELECT PasswordU,usuario from usuarios where idusuario='".$uss."';";
        $resSel=mysqli_query($mysqli,$sel2);
        while($row = mysqli_fetch_array($resSel)){
            $contra=$row[0];
            $correo=$row[1];
        }
        if(password_verify($_POST['cont2'],$contra)){
		$sql="UPDATE usuarios SET
        Nombres='".$Nombre."'
        ,ApaternoU='".$ap_duen."'
        ,AmaternoU='".$am_duen."'
        ,TcasaU='".$telfijo."'
        ,idColonia='".$colonia."'
        ,TcelularU='".$telcel."'
        ,PasswordU='".$pass."'
        ,Estado='".$est_nneg."'
        ,Municipio='".$munn_neg."'
        ,Fnac='".$Fecha."'
        ,Rangoyu='".$rangoy."'
        ,Rangoxu='".$rangox."'
        ,Usuario='".$Usuario."'
        ,Sexo='".$sexo."'
        WHERE idusuario='".$uss."';";
	   $res=mysqli_query($mysqli,$sql);
                   if(!$res){
            header("Location:Modificar_cuenta.php?est=err");
                        echo '<script>alert("La cuenta no pudo modificarse") window.location.href="Modificar_cuenta.php";</script>';
        }
        else{
            header("location: menu_principal.php");
            echo '<script>window.alert("La cuenta modificada existosamente");</script>';
        }
        }
        else{
                        header("Location:Modificar_cuenta.php");
                        echo '<script>alert("La cuenta no pudo modificarse") window.location.href="Modificar_cuenta.php";</script>';
        }
    }
?>
