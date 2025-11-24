<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 14: Parámetros de un Formulario</title>
</head>
<body>
    <form action="Mostrar.php" method="POST">
        <label for="producto">Producto</label><input type="text" name="producto"><br>
        <label for="cantidad">Cantidad</label><input type="number" name="cantidad"><br><br>
        <input type="submit" name="comprar" value="Comprar">
    </form>
    
</body>
</html>