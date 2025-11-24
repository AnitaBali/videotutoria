<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 14: Mostar Compra</title>
</head>
<body>
    <p>Has comprado: <?php echo $_POST['cantidad']?> unidades de <?php echo $_POST['producto']?> </p>
    <h1>Lista Total</h1>
    <?php
    if(!isset($_COOKIE['lista'])){
        setcookie("lista", "", time() + 200);
    } else {
       $listaCompra=$_COOKIE['lista'];

       $listaCompra .= $_POST['producto']."." .$_POST['cantidad'];

       setcookie("lista", $listaCompra . "<br>", time() + 500);
       echo $listaCompra;
    }
    ?>
    <br>
    <a href="Vista.php">Volver</a>

</body>
</html>