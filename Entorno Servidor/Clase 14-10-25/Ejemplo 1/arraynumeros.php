<?php

include 'funciones.php';

$arrayNumeros = [53,66,71,46,22,85,19,67,77,41,60];

$mayor=mayorValor($arrayNumeros);
$menor=menorValor($arrayNumeros);

echo "El mayor valor es: " . $mayor . "<br>"; 
echo "El menor valor es: " . $menor . "<br>";
echo "La suma de los valores es: " . sumaValores($arrayNumeros) . "<br>";
echo "La cantidad de números pares es: " . paresValores($arrayNumeros) . "<br>";
echo "La posición del mayor valor es: " . mayorValorPosicion($arrayNumeros) . "<br>";
echo "La posición del menor valor es: " . menorValorPosicion($arrayNumeros) . "<br>";

?>


