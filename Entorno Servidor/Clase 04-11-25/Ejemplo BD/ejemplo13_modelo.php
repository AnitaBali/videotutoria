<?php

function crearConexion($database) {
    $host = "localhost";
    $user = "root";
    $password = "";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
        die("<br>Error de conexión con la base de datos: " . mysqli_connect_error());
    }
    
    return $conexion;
}

function cerrarConexion($conexion) {
    mysqli_close($conexion);
}

function getListaCiudades() {
    $DB = crearConexion("world");

    $sql = "SELECT ID, Name, CountryCode, District, Population FROM city ORDER BY Population ASC";
    
    $result = mysqli_query($DB, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $ciudades = [];
        // Se añade el bucle para obtener los datos, ya que la función original solo devolvía el objeto result sin consumirlo.
        while ($row = mysqli_fetch_assoc($result)) {
            $ciudades[] = $row;
        }
        cerrarConexion($DB);
        return $ciudades;
    } else { 
        echo "No hay nada en la lista de ciudades.";
        cerrarConexion($DB);
        return false;
    }
}
?>