<?php

if(isset($_COOKIE['eleccion'])){
   if($_COOKIE['eleccion']=='Carne'){
    echo "Hay ternera en el menú";
} else if($_COOKIE['eleccion']=='Pescado'){
    echo "Hay salmón en el menú";
} else {
    echo "No hay menú disponible";
    
}
}

?>