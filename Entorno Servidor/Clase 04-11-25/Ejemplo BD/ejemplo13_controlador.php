<?php

include "ejemplo13_modelo.php";

function showListaCiudades() {
    $html = "";
    $datos = getListaCiudades();
    
    if (is_string($datos)) {
        echo $datos;
    } 
    else {
        foreach ($datos as $fila) {
            $html .= "<tr>";
            $html .= "<td>" . $fila["ID"] . "</td>";
            $html .= "<td>" . $fila["Name"] . "</td>";
            $html .= "<td>" . $fila["CountryCode"] . "</td>";
            $html .= "<td>" . $fila["District"] . "</td>";
            $html .= "<td>" . $fila["Population"] . "</td>";
            $html .= "</tr>";
        }
    }
    
    return $html;
}