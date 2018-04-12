<html>
    <head>
        <title>
            Inicia Sesi&oacute;n - CecyEmprende
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
            include ("barras.php");
    
        ?>
        <div class="contenido">
			<div class="modal_login">
				<form method="POST" action="accion_login.php">
					<label>
						Usuario:
					</label>
					<input name="uss" type="text"/>
					<br>
					<label>
						Contrase&ntilde;a:
					</label>
					<input name="cont" type="password"/>
					<br>
					<input class="ex" type="submit" value="Iniciar sesión"/>
				</form>
				<span>
					¿No tienes una cuenta?
					<a href="registro.php">
						Registrate
					</a>
				</span>
			</div>
        </div>
    </body>
</html>