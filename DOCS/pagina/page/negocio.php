<?php
	if(isset($_GET['idProd'])){
		
	}
	if(isset($_GET['cv_n']) || isset($_GET['neg'])){
		$nom=$_GET['neg'];
		$cv=$_GET['cv_n'];
	}
	require("conexion.php");
?>
<html>
    <head>
        <title>
            CecyEmprende
        </title>


        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <?php
            include ("barras.php");
    
        ?>
        <div class="contenido">
            <table class="catalogo_neg" cellspacing="8">
               
                <tr>
                    <th colspan="6">
                        <?php
							echo $nom;
						?>
                    </th>
                </tr>
				<tr>
                <?php
					$sql_prod="select producto, precio, codigo from productos where Negocio=".$cv.' order by precio;';
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
								<img src="img/img.jpg" width="50%">
							</div>
							<div class="producto_desc">
								<p>
									Descripcion
								</p>
								<div class="Precio">
									<p align="left"> 
										Precio: '.$fila[1].'
									</p>
								</div>
								<div class="BOTON_COMPRA">
									<a href="negocio.php?idProd='.$fila[2].'&&cv_n='.$cv.'&&neg='.$nom.'">
										<button>
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
