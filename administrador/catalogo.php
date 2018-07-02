<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/estilo.css">
    </head>

    <body>
        <?php
          include("Barras.php");
            ?>
            <section>
                <a href="agregar-producto.php" class="btn-a">Agregar producto</a>

                <table class="catalogo_neg" border="2">
                    <tr>
                        <th colspan="6">
                            Mi catalogo de productos
                        </th>
                    </tr>
                    <?php
                        $uss=$_SESSION['adminLog'];
                        $sqlCatalogo="SELECT Preciounitario,NombreP,idproducto,disponibilidad,Imagen FROM productos WHERE idnegocio=".$uss.";";
                        $res=mysqli_query($mysqli,$sqlCatalogo);
                        $num=0;
						$comprobar=null;
                        echo '<tr>';
                        while($fila=mysqli_fetch_array($res)) {
                            if($fila[3]==1){
                                $disp="checked";
                            }else{
                                $disp="";
                            }
                            $id=$fila[2];
                            echo'
                            <td>
                                <div class="producto_imagen">
                                    <img src="'.$fila[4].'"width="50%">
                                </div>
                                <div class="producto_desc">
                                    <p>
                                        '.$fila[1].'
                                    </p>
                                <div class="Precio">
                                    <p align="left">
                                        $'.$fila[0].'
                                    </p>
                                </div>
                                    <p align="right">
                                        <a href="ver-producto.php?id='.$fila[2].'">
                                            <button class="btn-int">
                                                Detalles
                                            </button>
                                        </a>
                                    </p>
                                </div>
                                <label class="switchBtn">
                                <input type="checkbox" id="dispon'.$id.'"value="'.$id.'"'.$disp.' onclick="alertaChecked'.$id.'(event)" />
                                <div class="slide round"><p id="descdisp'.$id.'">Si</p></div>
                                </label>
                            </td>
                            <script>
                                function alertaChecked'.$id.'(event){
                                    var compro=2;
                                    if(event.target.checked){
                                        //alert("El producto esta disponible");
                                        compro=1;';
                                        $comprobar="document.write(compro);";
                                        if($comprobar=1){
                                            $sqldispon="UPDATE productos SET disponibilidad=1 WHERE idproducto=".$id;
                                            $ladispon=mysqli_query($mysqli,$sqldispon);
                                        }
                                        echo '
                                        alert("'.$sqldispon.'");
                                        document.getElementById("descdisp'.$id.'").innerHTML="Si";
                                    }
                                    else{
                                        //alert("El producto esta disponible");
                                        compro=0;';
                                        $comprobar="document.write(compro);";
                                        if($comprobar=0){
                                        $sqldispon="UPDATE productos SET disponibilidad=0 WHERE idproducto=".$id;
                                        $ladispon=mysqli_query($mysqli,$sqldispon);}
                                        echo'
                                        alert("'.$sqldispon.'");
                                        document.getElementById("descdisp'.$id.'").innerHTML="No";
                                    }
                                }
                            </script>
 ';
                            $num++;
                            if($num==5){
                                echo '</tr><tr>';
                                $num=0;
                            }
                        }
                    echo '</tr>';
                    ?>
                </table>
            </section>
        <!--<script>
        function alertaChecked(event){
        if(event.target.checked){
                var id=event.target.value;
                alert('El producto esta disponible');
            ¿
                document.getElementById("descdisp").innerHTML="Si";
            }
            else{
                var id=event.target.value;
                alert('El producto esta disponible');

                document.getElementById("descdisp").innerHTML="No";
            }
            }
        </script>-->
    </body>
</html>
