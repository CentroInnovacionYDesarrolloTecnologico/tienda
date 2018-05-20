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
				<?php
					if(isset($_GET['est'])!=0){
						if(strcmp($_GET['est'],"err")){
							echo '<small style="color: red">Datos erroneos</small>';
						}
					}
				?>
				<span>
					¿No tienes una cuenta?
					<a href="registro.php">
						Registrate
					</a>
				</span>
			</div>
        </div>
    </body>
    <?php
        if(isset($_GET['est'])!=0){
            if(strcmp($_GET['est'],"err")==0){
                echo '
                    <script>
                        window.alert("Contraseña erronea");
                    </script>
                ';
            }
        }
    ?>
</html>
