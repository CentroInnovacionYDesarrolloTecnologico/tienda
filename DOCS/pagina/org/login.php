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
        <div class="cabecera">
            <div class="logo">
                <img src="img/logo.png" width="39%">
            </div>
            <div class="nombre">
                <h1>
                    Tienda en linea "CecyEmprende"
                </h1>
            </div>
            <div class="menu">
                 <div class="desplegable">
                    <a class="boton_superior">
                        <h2>
                            Cuenta
                        </h2>
                      
                    </a>
                    <div class="contenido_desplegable">
                      <a href="#">Iniciar sesi&oacute;n</a>
                    </div>
                  </div>
            </div>
        </div>
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