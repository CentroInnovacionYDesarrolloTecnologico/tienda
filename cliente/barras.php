<?php
    session_start();
    require("conexion.php");
$cantidad_productos=0;
    if(!isset($_SESSION['usrcnf'])==0){
        $sqlCarrito="select count(iddetalleventa) from detalleVenta where status=1 && idUsuario=".$_SESSION['usrcnf']."";
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
                       <a href="menu_principal.php"> <img src="img/21.png"" width="95%"></a>
                    </div>
                    <div class="nombre">
                        <h1>
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
                                echo '<a href="tiendas.php" style="display:none;">Mis tiendas</a>
                                <a href="pedidos.php">Ultimos pedidos</a>
                                <a href="Carrito.php">Carrito: ';
                                if($cantidad_productos!=0){
                                    echo $cantidad_productos;
                                }else{
                                    echo "No hay productos";
                                }
                                echo '</a>
                                <a href="Modificar_cuenta.php">Modificar cuenta </a>
                                <a href="logout.php">Cerrar sesi&oacute;n</a>';
							}
							echo '
                           </div>
                          </div>
                    </div>
                </div>

    ';
?>
