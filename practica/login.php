<?php
require 'conexion.php';
if (isset($_POST["login"])) {
    $usuario = $_POST["Usuario"];
    $password = $_POST["contraseña"];}
    $sql= "SELECT * FROM USUARIOS WHERE usuario = '$usuario' AND contraseña = '$password'";
    $resultado = mysqli_query($conexion, $sql);
    $num_registros = mysqli_num_rows($resultado);
    if ($num_registros > 0) {
        echo '<script> alert ("inicio de sesion exitoso, ¡Bienvenido" . "$usuario" . "!"")</script>';
        echo '<script>  window.location.href = "log.html"; </script>';

    } else {
        echo '<script> alert ("Usuario o contraseña incorrectos")</script>';
        echo '<script>  window.location.href = "main.html"; </script>';
    }
?>  