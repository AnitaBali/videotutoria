<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Formulario</title>
</head>
<body>

<form name="formulario" action="receptor.php" method="POST">
    <h1>FORMULARIO WEB</h1>
    <label>Usuario: </label> 
    <input type="text" name="nombre" value="">

    <label>Contraseña:</label>
    <input type="password" name="contraseña" value="">

    <input type="submit" name="enviar" value="Enviar">
    <input type="reset" name="cancelar" value="Cancelar">
</form>
    
</body>
</html>