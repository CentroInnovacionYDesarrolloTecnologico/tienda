<?php
	$nombre_dd=$_POST['nom_due'];
    $ap_duen=$_POST['ap_due'];
    $am_duen=$_POST['am_due'];
    $nacc_duen=$_POST['naci_due'];
    $nom_ne=$_POST['nom_neg'];
    $gir_neg=$_POST['giro_neg'];
    $est_nneg=$_POST['est_neg'];
    $munn_neg=$_POST['muni_neg'];
    $colo_negg=$_POST['colo_neg'];
    $cpp_negg=$_POST['cpp_neg'];
    $call_negg=$_POST['call_neg'];
    $numex_negg=$_POST['numex_neg'];
    $numin_negg=$_POST['numin_neg'];
    $telm_negg=$_POST['telm_neg'];
    $tell_negg=$_POST['tell_neg'];
    $corr_negg=$_POST['corr_neg'];
    $usu_negg=$_POST['usu_neg'];
	$pass=password_hash($_POST['pass_neg'],PASSWORD_DEFAULT);
	require("conexion.php");
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="INSERT INTO `cecyemprende`.`negocios` (Nombre_negocio,Nombre_duenio,ap_duenio,am_duenio,nac_duenio,Categoria,estado,municipio,colonia,ccpp,calle,num_ext,num_int,tel_movil,tel_local,correo,usuario,Contrasena) VALUES ('".$nom_ne."','".$nombre_dd."','".$ap_duen."','".$am_duen."','".$nacc_duen."','".$gir_neg."','".$est_nneg."','".$munn_neg."','".$colo_negg."','".$cpp_negg."','".$call_negg."','".$numex_negg."','".$numin_negg."','".$telm_negg."','".$tell_negg."','".$corr_negg."','".$usu_negg."','".$pass."');";
		$res=mysqli_query($mysqli,$sql);
	}	
?>