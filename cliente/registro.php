<html>
    <head>
        <title>
            Inicia Sesi&oacute;n - Patiyotl
        </title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
		<style>
			input[type=number]::-webkit-outer-spin-button,
			input[type=number]::-webkit-inner-spin-button {
				-webkit-appearance: none;
				margin: 0;
			}
			input[type=number] {
				-moz-appearance:textfield;
			}
		</style>
    </head>
    <body>
         <?php
            include ("barras.php");
    
        ?>
        <div class="contenido">
			<div class="modal_registro">
				<form method="POST" action="accion_registro.php">
					<label>
						Usuario:
					</label>
					<input name="usu" type="text" required="required"/>

					<label>
						Nombre:
					</label>
					<input id="nombre_usu" name="nom" type="text" required="required"/>

					<label>
						Apellido paterno:
					</label>
					<input name="app" type="text" required="required"/>

					<label>
						Apellido materno:
					</label>
					<input name="apm" type="text" required="required"/>

                    <label>
                        Fecha de nacimiento:
                    </label>
                     <input type="date" name="fecha" required="required"/>
                    <label>
                        Sexo:
                    </label>
                    <select name="sexo" required="required">
                        <option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
                    </select>
                    <br/>
                    <br/>
                    <label>
                        CP
                    </label>
                    <input type="number" name="CP" required="required"/>
                    <label>
                        Telefono celular
                    </label>
                    <input type="number" name="celular" required="required"/>
                    <label>
                        Telefono Fijo
                    </label>
                    <input type="number" name="fijo" required="required"/>
                    <label>   
						Correo electronico:
					</label>
					<input onkeyup="validar_contras()" id="c_e" name="c_e" type="text" required="required"/>

					<label>   
						Confirma tu correo electronico:
					</label>
					<input onkeyup="validar_contras()" id="c_e_e" name="c_e_c" type="text" required="required"/>

					<label>
						Contrase&ntilde;a:
					</label>
					<input onkeyup="validar_contras()" id="contra1" name="cont" type="password" required="required"/>

                    <label>
						Confirma tu contrase&ntilde;a:
					</label>
					<input onkeyup="validar_contras()"  id="contra2" name="confirm" type="password" required="required"/>

					<input id="paso" class="ex" type="submit" value="Guardar datos" disabled="disabled" />
					<?php
						echo '<span style="color:red"><b>Datos erroneos</b></span>';
					/*
					Usuario: No espacios
					Nombre: No numeros, 
					Apellidos: No numeros, no espacios
					Contraseña: 8-16, una mayuscula, no espacio, un numero
					Confirmacion contraseñas
					Fecha de mayoria de edad
					*/
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
		<script>
			var clv1=document.getElementById("contra1").value;
			var cantidad=clv1.length;
			var clv2=document.getElementById("contra2").value;
			var clv10=document.getElementById("c_e").value;
			var clv20=document.getElementById("c_e_e").value;
			var enter=document.getElementById("paso");
			var nombre = document.getElementById("nombre_us");
			enter.setAttribute("disabled","disabled");
		</script>
		<script>
			function validacion_usuario(){
				
			}
			function validar_contras(){
				var clv1=document.getElementById("contra1").value;
				var cantidad=clv1.length;
				var clv2=document.getElementById("contra2").value;
				var clv10=document.getElementById("c_e").value;
				var clv20=document.getElementById("c_e_e").value;
				var enter=document.getElementById("paso");
				if(clv1==clv2 && cantidad>=8 && cantidad<=16 && clv10==clv20){
					enter.removeAttribute("disabled");
				}else{
					enter.setAttribute("disabled","disabled");
				}
			}
			
		</script>
    </body>
</html>
