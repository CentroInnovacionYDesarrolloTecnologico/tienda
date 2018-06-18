<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Agregar producto</title>
    <link rel="stylesheet" href="CSS/estilo.css">


    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>

    <?php
      include("Barras.php");
    ?>
    <a href="Catalogo.php"><button type="button" class="btn-a" title="Volver al catalogo" name="button">Regresar</button></a>

    <div class="add-producto">
        <div class="Agregaaar">
            <h1>Agregar nuevo producto</h1>
            <p>Para agregar un nuevo producto llena los siguientes campos   con los datos correspondientes del producto</p>
        </div>
        <div class="datos-del-producto">
            <form method="post" action="accion-agregar.php">
                <label>Nombre del producto:</label>
                <input type="text" name="nombre" value="" required="required">
                <label>Codigo de barras:</label>
                <input type="text" name="codigo" value="">
                <label>Descripci&oacute;n:</label>
                <textarea name="descrip" class="descripcion" rows="4" cols="22" required="required"></textarea>   <label>Precio:</label>
                <input type="text" name="precio" value="">
                <label style="display: inline-block;" for="ag_img">Imagen:</label><input style="display: inline-block;" type="file" name="imagen" id="img">
                <input style="width: 150px;" class="btn-int" type="submit" value="Agregar Producto">
            </form>
        </div>
    </div>
</body>

</html>
