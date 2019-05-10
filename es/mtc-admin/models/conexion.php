<?php
function conectarse(){
    $servidor="localhost";
    $usuario="b2u4b3e3_mou_es";
    $password="Hidalgo123@";
    $bd="b2u4b3e3_mountain_es";

    $conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectar a la bd");
    return $conectar;
}

$conexion = conectarse();
 ?>