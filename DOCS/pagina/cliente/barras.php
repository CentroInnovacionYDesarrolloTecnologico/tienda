<?php
$cantidad_productos=0;
    echo '
    
                <div class="cabecera">
                    <div class="logo">
                       <a href="menu_principal.php"> <img src="img/logo-812763_960_720.png" width="35%"></a>
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
                            <a href="login.php">Iniciar sesi&oacute;n</a>
                            <a href="tiendas.php">Mis tiendas</a>
                            <a href="pedidos.php">Ultimos pedidos</a>
                            <a href="ubicacion.php">Mis ubicaciones</a>
                            <a href="Carrito.php">Carrito: '.$cantidad_productos.'</a>
                           </div>
                          </div>
                    </div>
                </div>

    ';
?>