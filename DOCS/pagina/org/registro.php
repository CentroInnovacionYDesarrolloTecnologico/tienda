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
			<div class="modal_registro">
				<form method="POST" action="accion_registro.php">
					<label>
						Nombre:
					</label>
					<input name="nom" type="text"/>
					<br>
					<label>
						Apellido paterno:
					</label>
					<input name="app" type="text"/>
					<br>
					<label>
						Apellido materno:
					</label>
					<input name="apm" type="text"/>
					<br>
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
					<input class="ex" type="submit" value="Guardar datos"/>
					<?php
						echo '<span style="color:red"><b>Datos erroneos</b></span>';
					?>
				</form>
				<span>
					¿Ya tienes una cuenta?
					<a href="login.php">
						Inicia sesi&oacute;n
					</a>
				</span>
			</div>
        </div>
    </body>
</html>