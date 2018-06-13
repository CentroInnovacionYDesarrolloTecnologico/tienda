<?php
session_start();
if(isset($_SESSION['adminLog'])!=0){
require("conexion.php");
echo'
<div class="barra-superior">
    <div class="titulo">
        <h1>PATIYOTL</h1>
    </div>
</div>
<div class="cont">
    <div class="barra-lateral" >
        <div class="logo">
            <a href="index.php">
              <img class="logo_pati" src="img/logo-812763_960_720.png" title="Menu" alt="logo"/>
            </a>
        </div>
        <div class="opciones">
            <ul class="menus">
                <li><a href="Catalogo.php">Mi catalogo</a></li>
                <li><a href="Ventas.php">Ventas</a> </li>
                <li><a href="Calificaciones.php">Calificaciones</a> </li>
                <li><a href="Cuenta.php">Mi cuenta</a> </li>
                <li><a href="logout.php">Cerrar sesion</a> </li>
            </ul>
        </div>
    </div>
</div>';
}else{
    header("Location: login.php");
}
?>
