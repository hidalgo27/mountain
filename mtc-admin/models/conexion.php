<?php
function conectarse(){
    $servidor="localhost";
    $usuario="pandanin_mount";
    $password="Hidalgo123@";
    $bd="pandanin_mountain";

    $conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectar a la bd");
    return $conectar;
}

$conexion = conectarse();
 ?>