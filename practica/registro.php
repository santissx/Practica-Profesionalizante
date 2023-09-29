<?php
require 'conexion.php';

if (isset($_POST['registro'])) {
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['contraseña'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['Fecha_de_nacimiento'];
    try {
                $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña')";

               $resultado = mysqli_query($conexion, $sql);
               echo "Registro exitoso";
               if ($resultado) {
                $id_usuario = mysqli_insert_id($conexion);
                $sql2 = "INSERT INTO personas (nombre, apellido, fecha_nacimiento, id_usuario) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$id_usuario')";
                $resultado2 = mysqli_query($conexion, $sql2);
        
                if ($resultado2) {
                    echo '<script> alert ("usuario registrado con exito")</script>';
                    echo '<script>  window.location.href = "registro.html"; </script>';
                } else {
                    echo '<script> alert ("Error al registrar el usuario")</script>';
                    echo '<script>  window.location.href = "registro.html"; </script>';
                }
            }
            } catch (mysqli_sql_exception $e){ 
                    echo '<script> alert ("usuario ya existente")</script>';
                    echo '<script>  window.location.href = "registro.html"; </script>';
                }    
            }
?>