<html>
    <head>
        <title>
            CecyEmprende
        </title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="estilo2.css">
    </head>
    
    <body>
        <?php
            include ("barras.php");
    
        ?>
        <div class="contenido">

            <table class="tabla_pedido" cellpadding="10" width="80%"cellspacing="5">
                <tr>
                    <th class="thprueba">
                        Ultimos pedidos
                    </th>
                </tr>
                 <tr>
                    <td>
                        <div class="tdfecha">
                            <table width="100%">
                              <tr>
                                    <td>
                                        Fecha inicial  <input type="date" align="right">
                                    </td>
                                    <td>Ultima fecha  <input type="date" align="right">
                                </td></tr>
                            </table>
                        </div>
                        <div class="tddescripcion">
                            Lista de productos
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <button href="#">ver mas...</button>
                        </div>
                    </td>
                </tr>                
            </table>

        </div>
    </body>
</html>
