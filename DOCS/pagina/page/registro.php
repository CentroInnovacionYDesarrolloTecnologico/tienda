<html>
    <head>
        <title>
            Inicia Sesi&oacute;n - CecyEmprende
        </title>


        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
         <?php
            include ("barras.php");
    
        ?>s
        <div class="contenido">
			<div class="modal_registro">
				<form method="POST" action="accion_registro.php">
					<label>
						Nombre:
					</label>
					<input name="nom" type="text"/>

					<label>
						Apellido paterno:
					</label>
					<input name="app" type="text"/>

					<label>
						Apellido materno:
					</label>
					<input name="apm" type="text"/>

                    <label>
                        Fecha de nacimiento:
                    </label>
                     <input type="date" name="Fecha_nacimiento">
                     <label>
                        Sexo:
                    </label>
                    <div class="Seleccion_sexo">
                        <label for="hombre">
                            Hombre
                        </label>
                        <input type="radio" name="sexo" id="hombre"/>
                        Mujer
                        <input type="radio" name="sexo" id="mujer"/>
                        
                    </div>
                    <label>
                        Telefono celular
                    </label>
                    <input type="number" name="NumeroCelular"/>
                    <label>
                        Telefono Fijo
                    </label>
                    <input type="number" name="NumeroFijo"/>
                    <label>   
						Usuario:
					</label>
					<input name="uss" type="text"/>

					<label>
						Contrase&ntilde;a:
					</label>
					<input name="cont" type="password"/>

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
