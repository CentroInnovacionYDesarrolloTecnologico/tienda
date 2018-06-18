<html>
    <head>
        <title>
            Patiyotl
        </title>

        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
		
        <?php
            include ("barras.php");
		?>
        <?php
            $txt_att="";
            $txt_mens="";
            if(isset($_SESSION['usrcnf'])==0){
                $txt_att='disabled="disabled"';
                $txt_mens="<span style=".'"background-color: white; position: fixed; border: 2px red solid; border-radius: 5px; padding: 10px; margin-left: auto; margin-right: 0;"'.">Para realizar una compra necesita iniciar sesi&oacute;n</span>";
            }
            if(isset($_GET['cv_n']) || isset($_GET['neg'])){
                $nom=$_GET['neg'];
                $cv=$_GET['cv_n'];
            }
        ?>
        <div class="contenido">
            <table class="catalogo_neg" cellspacing="8">
        <?php
			echo $txt_mens;
		?>
		
                <tr>
                    <th colspan="6">
                        <?php
							echo $nom;
						?>
                    </th>
                </tr>
				<tr>
                <?php
					$sql_prod="select NombreP, preciounitario, idproducto,descripcion from productos where idNegocio=".$cv.' && disponibilidad=1 order by preciounitario;';
					$res1=mysqli_query($mysqli,$sql_prod);
					$o=0;
					while($fila = mysqli_fetch_array($res1)){
						$o++;
						echo'
						<td class="producto">
							<div class="producto_titulo">
								'.$fila[0].'
							</div>
							<div class="producto_imagen">
								<img src="img/producto.jpg" width="50%">
							</div>
							<div class="producto_desc">
								<p>
									'.$fila[3].'
								</p>
								<div class="Precio">
									<p align="left"> 
										Precio: $'.$fila[1].'
									</p>
								</div>
								<div class="BOTON_COMPRA">
									<a href="accion_agregar_carrito.php?idProd='.$fila[2].'&&cv_n='.$cv.'&neg='.$nom.'">
										<button '.$txt_att.'>
											<img src="img/carrito.jpg" width="20%">										
										</button>
									</a>
								</div>
							</div>
						</td>';
						if($o==6){
							echo '</tr><tr>';
						}
					}
                ?>
            </table>
        </div>
    </body>
</html>
