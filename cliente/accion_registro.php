<?php
	$us=$_POST['usu'];
	$pass=password_hash($_POST['cont'],PASSWORD_DEFAULT);
	$nombre=$_POST['nom'];
	$app=$_POST['app'];
	$apm=$_POST['apm'];
	$fecha=$_POST['fecha'];
	$sexo=$_POST['sexo'];
	$celu=$_POST['celular'];
	$fijo=$_POST['fijo'];
	$correo=$_POST['c_e'];
    $CP=123;//$_POST['CP'];
    //$PX=1;
    //$PY=1;
    $PX=$_POST['posicionX'];
    $PY=$_POST['posicionY'];
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
        try{
            $sql="INSERT INTO `usuarios` (Usuario,PasswordU,Nombres,ApaternoU,AmaternoU,Fnac,Sexo,TcelularU,TcasaU,CorreoU,CP,Rangoyu,Rangoxu) VALUES ('".$us."','".$pass."','".$nombre."','".$app."','".$apm."','".$fecha."','".$sexo."','".$celu."','".$fijo."','".$correo."','".$CP."','".$PY."','".$PX."');";
            echo $sql;
            $res=mysqli_query($mysqli,$sql);
            if(!$res){
                header("Location: registro.php?req=1");
            }else{
                header("Location: login.php");
            }
        }catch (Exception $e) {
            throw 'Excepción capturada: '.  $e->getMessage(). "\n";
        }
	}	
?>
