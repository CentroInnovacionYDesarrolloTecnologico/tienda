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
			<div class="modal_registro">
				<form method="POST" action="accion_registro.php">
					<label>
						Nombre:
					</label>
					<input name="nom" type="text" required="required"/>
					<br>
					<label>
						Apellido paterno:
					</label>
					<input name="app" type="text" required="required"/>
					<br>
					<label>
						Apellido materno:
					</label>
					<input name="apm" type="text" required="required"/>
					<br>
                    <label>
                        Fecha de nacimiento:
                    </label>
                     <input type="date" name="Fecha_nacimiento" required="required"/>
                    <label>
                        Sexo:
                    </label>
                    <select required="required">
                        <option>Hombre<option>Mujer</option>
                    </select>
                    <br/>
                    <br/>
                    <label>
                        Telefono celular
                    </label>
                    <input type="number" name="NumeroCelular" required="required"/>
                    <label>
                        Telefono Fijo
                    </label>
                    <input type="number" name="NumeroFijo" required="required"/>
                    <label>   
						Usuario:
					</label>
					<input name="uss" type="text" required="required"/>
					<br>
					<label>
						Contrase&ntilde;a:
					</label>
					<input name="cont" type="password" required="required"/>
					<br>
                    <label>
						Confirma tu contrase&ntilde;a:
					</label>
					<input name="confirm" type="password" required="required"/>
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