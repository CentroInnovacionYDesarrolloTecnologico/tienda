<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Mi cuenta Patiyotl</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
    <?php
      include("Barras.php");
        ?>

        <div class="cuenta">
                <h1>Mi cuenta</h1>
            &emsp;&emsp;&emsp;&emsp;En esta seccion podras visualizar y modificar los datos de tu negocio, te recomendamos que no alteres los campos para no dañar tu posici&oacute;n dentro del sistema
            <div class="Formulario-cuenta">
                    <h4>DATOS PERSONALES</h4>
                    Nombre (s):
                    <input type="text" name="htNombreA" value="" size="25" required="required"> Apellido paterno:
                    <input type="text" name="htApellidopB" value="" size="25" required="required"> Apellido materno:
                    <input type="text" name="htApellidomC" value="" size="25" required="required"> Fecha de nacimiento:
                    <input type="date" name="" value="" required="required">
            </div>
            <div class="Formulario-negocio">
                    <h4>Datos del negocio</h4>
                    Nombre del negocio:
                    <input type="text" name="" value="" required="required">  Giro:
                    <select class="Giro" name="" required="required">
            <option selected>Abarrotes</option>
            <option>Comida</option>
            <option >Farmacia</option>
            <option>Flores</option>
            <option>Otro</option>
          </select> Estado:
                    <select class="Estado" name="" required="required">
            <option>Aguascalientes</option><option>Baja California</option><option>Baja California Sur</option><option>Campeche</option>
            <option>Chiapas</option><option>Chihuahua</option><option>Ciudad de México</option><option>Coahuila</option>
            <option>Colima</option><option>Durango</option><option>Guanajuato</option><option>Guerrero</option><option>Hidalgo</option>
            <option>Jalisco</option><option selected>México</option><option>Michoacan</option><option>Morelos</option>
            <option>Nayarit</option><option>Nuevo León</option><option>Oaxaca</option><option>Puebla</option><option>Queretaro</option>
            <option>Quintana Roo</option><option>San Luis Potosi</option><option>Sinaloa</option><option>Sonora</option>
            <option>Tabasco</option><option>Tamaulipas</option><option>Tlaxcala</option><option>Veracruz</option><option>Yucatán</option>
            <option>Zacatecas</option>
          </select>Municipio:

                    <select class="Municipio" name="" required="required">
            <option selected>Cuautitlán</option>
            <option>Cuautitlán Izcalli</option>
            <option>Melchor Ocampo</option>
            <option>Tepotzotlan</option>
            <option>Tultepec</option>
            <option>Tultitlan</option>
            <option>Zumpango</option>
          </select> Colonia:

                    <input type="text" name="" value="" required="required"> Codigo Postal (C.P.):
                    <input type="text" name="" value="" required="required" ondragover=""> Calle:
                    <input type="text" name="" value="" required="required  "> Numero Exterior:
                    <input type="text" name="" value="" required="required"> Numero interior:
                    <input type="text" name="" value="" required="required"> Telefono celular:
                    <input type="text" name="" value="" required="required">Telefono local:
                    <input type="text" name="" value="">
            </div>
            <div class="Formulario-cuenta">
                    <h4>Datos de Acceso</h4>
                    Nombre de usuario:
                    <input type="text" required="required" name="" value="">Contraseña nueva:
                    <input type="password" name="" required="required" value="">
            </div>
            <div class="Formulario-seguridad">
                    <h4>Datos de seguridad</h4>
                    Ingresa estos datos para poder modificar los datos de tu cuenta  Contraseña:
                    <input type="password" name="" required="required" value="">Confirmar contraseña:
                    <input type="password" name="" value="" required="required">
                    <a class="boton_personalizado" href="#">Modificar</a>
            </div>

        </div>
    </body>
</html>
