

<!-- Ejemplo 1: Como integrar HTML y PHP en un mismo fichero-->

<html>
    <head>
        <title>Ejemplo 1: HTML y PHP</title>
    </head>

    <body>
        <ul> 
            <!--Comentario en HTML -->
            <li><?php echo "Punto <a href='https://www.udemy.com/'>primero</a>" ?></li>
            <li><?php echo "Punto segundo" ?></li>
        </ul>

        <?php
            #Comentario en PHP
            echo "<ul>
                    <li>Punto tercero</li>
                    <li>Punto cuarto</li>
                 </ul>"
        ?>

    <?php
        echo "Hola Ana"
    ?>

    </body>

</html>

