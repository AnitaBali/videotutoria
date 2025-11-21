<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 6: Session</title>
</head>
<body>
    
    <?php

    session_start(); 
    if(!isset($_SESSION['tActual'])) {
        $_SESSION['tActual'] = time();
        echo "Sesión iniciada a las " . date("H:i:s", $_SESSION['tActual']);
    } else {
        echo "Se cierra la sesión iniciada a las " . date("H:i:s", $_SESSION['tActual']);
        session_destroy();
    }

    ?>

</body>
</html>