<?php
session_start();
if(isset($_SESSION['adminLog'])!=0){
require("conexion.php");
echo'
<div class="barra-lateral" >
    <div class="logo">
        <a href="index.php">
            <img class="logo_pati" src="img/2.png" title="Menu" alt="logo"/>
            </a>
        </div>
        <div class="opciones">
            <ul class="menus">
                <a href="Catalogo.php"><li>Mi catalogo</li></a>
                <a href="Ventas.php"><li>Ventas</li></a>
                <a style="display: none;" href="Calificaciones.php"><li>Calificaciones</li></a>
                <a href="Cuenta.php"><li>Mi cuenta</li></a>
                <a href="Logout.php"><li>Cerrar sesion</li></a>
            </ul>
        </div>
    </div>
    <div class="cont">
';
}else{
    header("Location: login.php");
}
?>
