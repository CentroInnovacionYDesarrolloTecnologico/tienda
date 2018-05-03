<html>
    <head>
        <title>
            CecyEmprende
        </title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    
    <body>
        <?php
            include ("barras.php");
        ?>
        <div class="contenido">
			<?php
				$consul_neg="select nnegocio, razon, idnegocio from negocios where statusN!=0;";
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
							<p>
								Direccion completa
							</p>
							<h4>
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
