<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "proyecto";
    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }
    
?>
