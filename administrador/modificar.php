<?php
    require("conexion.php");
	$nombre_dd=$_POST['htNombreA'];
    $ap_duen=$_POST['htApellidopB'];
    $am_duen=$_POST['htApellidomC'];
    $nacc_duen=$_POST['fnac'];
    $nom_ne=$_POST['nom_negc'];
    $gir_neg=$_POST['Giro'];
    $est_nneg=$_POST['est_negc'];
    $munn_neg=$_POST['Municipio'];
    $colo_negg=$_POST['colo_negc'];
    $cpp_negg=$_POST['cpp_negc'];
    $call_negg=$_POST['call_negc'];
    $telm_negg=$_POST['telm_negc'];
    $tell_negg=$_POST['tell_negc'];
    $corr_negg=$_POST['Correo'];
	$pass=password_hash($_POST['pass_negc'],PASSWORD_DEFAULT);
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="UPDATE Negocios SET CorreoRN='".$corr_negg."',NombreRN='".$nombre_dd."',ApaternoRN='".$ap_duen."',AmaternoRN='".$am_duen."',TcasaN='".$telm_negg."',ColoniaN='".$colo_negg."',TcelN='".$tell_negg."',PasswordN='".$pass."',NNegocio='".$nom_ne."',Estado='".$est_nneg."',Municipio='".$munn_neg."'";
	}
?>
