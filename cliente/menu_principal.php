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
            <select style="display: block; margin-top: 10px; margin-left: 20px;" onchange='window.location="menu_principal.php?giro="+this.value'>
                <option value="">Categorias...</option>
                <?php
                    $sqlCatego="select razon from negocios group by razon;";
                    $resCatego=mysqli_query($mysqli,$sqlCatego);
                    while($fila12=mysqli_fetch_array($resCatego)){
                        echo '<option value="'.$fila12[0].'">'.$fila12[0].'</option>';
                    }
                ?>
            </select>
			<?php
				if(isset($_GET['giro'])!=0){
                    $consul_neg="select nnegocio, razon, idnegocio,estado,municipio,calle,tceln from negocios where statusN!=0 && razon like '%".$_GET['giro']."%';";
                }else{
                    $consul_neg="select nnegocio, razon, idnegocio,estado,municipio,calle,tceln from negocios where statusN!=0;";
                }
				$res=mysqli_query($mysqli,$consul_neg);
				while($fila = mysqli_fetch_array($res)){
					echo '
					<a href="negocio.php?cv_n='.$fila[2].'&&neg='.$fila[0].'">
						<div class="negocio" id="'.$fila[2].'">
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
