<?php
//Aquí tendremos las funciones que gestionan los datos
function enumerarElementos($listaCompra){
    //Recorremos el array y mostramos los elementos
    foreach($listaCompra as $elemento){
        echo "<li>$elemento</li>";
    }
}

?>