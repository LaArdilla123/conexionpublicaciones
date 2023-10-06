<?php

    $conexion = new mysqli("localhost","root","","publicaciones");
    if($conexion){
        echo "conexion existosa!";
    }else{
        echo "fallo en la conexion";
    }

?>