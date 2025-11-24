<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 10_MODELO-VISTA-CONTROLADOR</title>
</head>
<body>
    <h1>Lista de la Compra</h1>    
    <ol>
    <?php
        //Incluimos el modelo para tener los datos
        include "Modelo.php";
        include "Controlador.php";

        //Llamamos a la función del controlador
        enumerarElementos($compra); 
    ?>
    </ol>

</body>
</html>