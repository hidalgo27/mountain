<?php
function conectarse(){
    $servidor="localhost";
    $usuario="b2u4b3e3_mou_us";
    $password="Hidalgo123@";
    $bd="b2u4b3e3_mountain_us";

    $conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectar a la bd");
    return $conectar;
}

$conexion = conectarse();
 ?>