<?php
function conectarse(){
    $servidor="localhost";
    $usuario="pandanin_mount_e";
    $password="Hidalgo123@";
    $bd="pandanin_mountain_es";

    $conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectar a la bd");
    return $conectar;
}

$conexion = conectarse();
 ?>