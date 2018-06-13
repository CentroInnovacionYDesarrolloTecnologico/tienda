<?php
session_start();
if(isset($_SESSION['adminLog'])==0){
    echo '
    <!DOCTYPE html>
    <html lang="es" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Registro Patiyotl</title>
        <link rel="stylesheet" href="CSS/estilo.css">
    </head>

    <body>
        <div class="barra-superior">
            <div class="titulo">
                <h1>
                    PATIYOTL
                </h1>
            </div>
        </div>
        <div class="descrip">
            <div class="logo-login">
                    <img src="img/logo-812763_960_720.png" alt="Logo">
            </div>
            <div class="descripcion-login">
                <p>En esta parte se podra encontrar la descripcion de nuestra pagina y su objetivo </p>
            </div>
        </div>
        <div class="Formulario-logueo">
            <form action="accion-login.php" method="post">
            <h4>Ingresar correo:</h4>
            <input type="text" name="Nom" value="">
            <h4>Ingresar contraseña:</h4>
            <input type="password" name="cont" value="">
            <input type="submit" name="ingresar" value="Ingresar"/>
            </form>
            <a href="Recupera.php">Olvide mi contraseña</a>
            <a href="Registro.php">Registrarme</a>
        </div>
    </body>
    </html>';
}else{
    header("Location: index.php");
}
?>
