<?php
    require("conexion.php");
	$nombre_dd=$_POST['nom_due'];
    $ap_duen=$_POST['ap_due'];
    $am_duen=$_POST['am_due'];
    $nacc_duen=$_POST['naci_due'];
    $nom_ne=$_POST['nom_neg'];
    $gir_neg=$_POST['giro_neg'];
    $est_nneg=$_POST['est_neg'];
    $munn_neg=$_POST['muni_neg'];
    $Duo=$_POST['Duo'];
    $call_negg=$_POST['call_neg'];
    $telm_negg=$_POST['telm_neg'];
    $tell_negg=$_POST['tell_neg'];
    $corr_negg=$_POST['corr_neg'];
    $PX=$_POST['posicionX'];
    $PY=$_POST['posicionY'];
	$pass=password_hash($_POST['pass_neg'],PASSWORD_DEFAULT);
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		$sql="INSERT INTO `patiyotl`.`negocios` (CorreoRN,NombreRN,ApaternoRN,AmaternoRN,TcasaN,Razon,TcelN,PasswordN,Calle,NNegocio,Estado,Municipio,idColonia,FnacRN,Rangoxn,Rangoyn,StatusN) VALUES ('".$corr_negg."','".$nombre_dd."','".$ap_duen."','".$am_duen."','".$tell_negg."','".$gir_neg."','".$telm_negg."','".$pass."','".$call_negg."','".$nom_ne."','".$est_nneg."','".$munn_neg."','".$Duo."','".$nacc_duen."','".$PX."','".$PY."',1);";
		$res=mysqli_query($mysqli,$sql);
        if(!$res){
            echo 'El producto no puede ser agregado';
        }
        else{
            echo'Producto agregado exitosamente';
            header("location: login.php");
        }
	}	
?>
