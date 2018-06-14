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
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="UPDATE Usuarios SET CorreoU='".$corr_negg."',Nombres='".$Nombre."',ApaternoU='".$ap_duen."',AmaternoU='".$am_duen."',TcasaU='".$telfijo."',idColonia='".$colonia."',TcelularU='".$telcel."',PasswordU='".$pass."',Estado='".$est_nneg."',Municipio='".$munn_neg."',Fnac='".$Fecha."',Rangoyu='".$rangoy."',Rangoxu'".$rangox."',Usuario='".$Usuario."',Sexo='".$sexo."' where id='".$uss."';'";
	}
?>
