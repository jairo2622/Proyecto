<?php
function conectar(){
    $server = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $bd = 'Autoservicio_43';

    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("Error en la conexion");
    return $conexion;
}
?>