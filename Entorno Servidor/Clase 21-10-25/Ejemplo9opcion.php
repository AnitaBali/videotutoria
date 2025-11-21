<?php

$opciones=[
    'a'=>'Carne',
    'b'=>'Pescado',
    'c'=>'Verduras'
];

$opcionElegida=$opciones['a'];
echo $opcionElegida. "<br>";
setcookie('eleccion', $opcionElegida, time() + 15); // Cookie válida por 5 segundos
echo "Cookie creada con la opción elegida.";

?>