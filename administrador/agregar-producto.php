<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Agregar producto</title>
    <link rel="stylesheet" href="CSS/estilo.css">


    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body bgcolor="#d0d8e5">

    <?php
      include("Barras.php");
        ?>

    <div class="add-producto">
        <button type="button" class="btn-back" title="Volver al catalogo" name="button"><a href="Catalogo.php">Regresar</a> </button>
        <div class="imagen-agregar-producto">
            <button type="button" title="Agregar imagen del producto" name="button"><img src="img/agregar-imagen.jpg" title="Agregar imagen del producto" width="100%" class="img-add-pp" alt=""></button>
        </div>
        <div class="Agregaaar">
            <h1>Agregar nuevo producto</h1>
            <p>Para agregar un nuevo producto llena los siguientes campos   con los datos correspondientes del producto</p>
        </div>

        <div class="datos-del-producto">
            <form method="post" action="accion-agregar.php">

                    Nombre del producto:
                    <input type="text" name="nombre" value="" required="required">   Descripcion:

                    <textarea name="descrip" class="descripcion" rows="4" cols="22" required="required"></textarea>   Precio:

                    <input type="text" name="precio" value="">   codigo de barras:
                    <input type="text" name="codigo" value="">
                    <input type="submit" value="Agregar Producto">

            </form>
        </div>
    </div>
</body>

</html>
