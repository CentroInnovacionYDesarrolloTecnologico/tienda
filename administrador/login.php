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
        <div class="descrip">
            <div class="logo-login">
                    <img src="img/2.png" alt="Logo">
            </div>
            <div class="descripcion-login">
                <p>Patiyotl es una plataforma de comercio electr&oacute;nico cuyo objetivo es acercar a los pequeños negocios con los usuarios cotidianos, abriendo las puertas de la difusi&oacute;n tecnol&oacute;gica a aquellos comerciantes que se han visto afectados por esta brecha</p>
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
    </div>
    </body>
    </html>';
}else{
    header("Location: index.php");
}
?>

