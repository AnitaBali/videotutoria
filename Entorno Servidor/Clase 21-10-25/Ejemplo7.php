<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 7</title>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['Usuario'])) { //Comprobar si la variable de sesión 'Usuario' está definida
    $_SESSION['Usuario'] = 'Onliner'; //Asignar valor 'Onliner' a la variable de sesión 'Usuario'
} else {
    $_SESSION['Usuario'] = null;
}

switch($_SESSION['Usuario']) {
    case 'Onliner':
        echo "El valor de la variable de sesión 'Usuario' es Onliner";
        break;
    default:
        echo "La variable de sesión 'Usuario' no está definida o es nula";
        break;
}

?>
    
</body>
</html>