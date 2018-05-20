<html>
    <head>
        <title>
            Inicia Sesi&oacute;n - Patiyotl
        </title>


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

					<label>
						Contrase&ntilde;a:
					</label>
					<input name="cont" type="password"/>

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
