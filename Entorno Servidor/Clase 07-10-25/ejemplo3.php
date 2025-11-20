<!DOCTYPE html>
<html>

    <head>
        <title>Ejemplo 3</title>
        <style type="text/css">
            img{
                width: 300px;
                height: 300px;
            }
        </style>
    </head>

    <body>
        <?php
            #Podemos definir codigo PHP en cualquier punto del fichero
            $direccion="ejemplo2";
            $extension=".php";
            $imagen="logo.png";
        ?>

        <!--Seguir programando en HTML e insertar dentro del fragmento código PHP
        para completar algún valor -->
        <a href="<?php echo $direccion . $extension ?>">
            Este enlace coge la dirección definida de las variables PHP
        </a> <br>
        <img src="<?php echo $imagen ?>">


    </body>

</html>