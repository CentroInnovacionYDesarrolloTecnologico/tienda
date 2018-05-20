<html>
    <head>
        <title>
            Patiyotl
        </title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
		<div class="contenedor_index">
            <div class="logo_index">

                <img class="centro" src="img/logo.png">

            </div>
            <form method="post" action="#" class="formulario_ubicacion">
                <select id="zona" class="select_1" onchange="aparecer1()">
                    <option value="1">
                        Zona 1
                    </option>
                    <option value="2">
                        Zona 2
                    </option>
                </select>
                <select id="colonia" class="select_2" onchange="aparecer2()">
                    <option value="1">
                        Colonia 1
                    </option>
                    <option value="2">
                        Colonia 2
                    </option>
                </select>
            </form>
            <div id="flecha" class="flecha">
                <a href="menu_principal.php"><img src="img/flecha.png"></a>
            </div>
            <script>
                function aparecer1(){
                    document.getElementById("colonia").style.display="inherit";
                }
                function aparecer2(){
                    document.getElementById("flecha").style.display="inherit";
                }
            </script>
        </div>
    </body>
</html>
