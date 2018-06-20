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
        <div class="contenido">
			<?php
				$consul_neg="select nnegocio, razon, idnegocio,estado,municipio,calle,tceln from negocios where statusN!=0;";
				$res=mysqli_query($mysqli,$consul_neg);
				while($fila = mysqli_fetch_array($res)){
					echo '
					<a href="negocio.php?cv_n='.$fila[2].'&&neg='.$fila[0].'">
						<div class="negocio">
							<h3>
								'.$fila[0].'
							</h3>
							<span>
								<img src="tiendita.png">
							</span>
							<p class="direc">
                                '.$fila[3].', '.$fila[4].', '.$fila[5].'
                                <br>
                                '.$fila[6].'
                            </p>
							<h4 class="giro">
								'.$fila[1].'
							</h4>
						</div>
					</a>
					';
				}
            ?>
        </div>
    </body>
</html>
