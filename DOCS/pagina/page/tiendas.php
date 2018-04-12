<?php
	require("conexion.php");
?>
<html>
    <head>
        <title>
            CecyEmprende
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
         <?php
            include ("barras.php");
        ?>
        <div class="contenido">
            <table class="catalogo_neg">
                <?php
				$consul_neg="select negocio, categoria from negocios where estatus!=0;";
				$r=mysqli_query($mysqli,$consul_neg);
				while($fila=mysqli_fetch_array($r)){
						
					echo '
					<tr>
						<td>
							<a href="negocio.html">
								<div class="negocio">
									<h3>
										'.$fila[0].'
									</h3>
									<span>
										<img src="tiendita.png">
									</span>
								</div>
							</a>
							<div class"descripcion">
								<p align="left">
									Giro: '.$fila[1].'
								</p>
							</div>
						</td>
					</tr>';
				}
				?>
            </table>
        </div>
    </body>
</html>