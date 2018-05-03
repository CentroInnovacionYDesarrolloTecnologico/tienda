<?php
    session_start();
    require("conexion.php");
    if(!isset($_SESSION['usrcnf'])==0){
        $sqlCarrito="select count(idDetalleVenta) from detalleVenta where idUsuario=".$_SESSION['usrcnf'];
        $resCarrito=mysqli_query($mysqli,$sqlCarrito);
        while($fila=mysqli_fetch_array($resCarrito)){
            $cantidad_productos=$fila[0];
        }
    }else{
        $cantidad_productos=0;
    }
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
                            <div class="contenido_desplegable">';
							if(isset($_SESSION['usrcnf'])==0){
								echo '
								<a href="login.php">Iniciar sesi&oacute;n</a>
								';
							}else{
                                echo '<a href="tiendas.php">Mis tiendas</a>
                                <a href="pedidos.php">Ultimos pedidos</a>
                                <a href="Carrito.php">Carrito: '.$cantidad_productos.'</a>
                                <a href="logout.php">Cerrar sesi&oacute;n</a>';
							}
							echo '
                           </div>
                          </div>
                    </div>
                </div>

    ';
?>
