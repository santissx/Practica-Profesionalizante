<?php
    $servidor= "localhost";
    $usuario="root";
    $contraseña="";
    $base_de_Datos="login";

    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_Datos);
    
    if (!$conexion) {
        die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
    }
?>
