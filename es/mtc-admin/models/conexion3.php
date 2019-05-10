<?php
function conectarse(){
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="dbgoto";

	$conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectar a la bd");
	return $conectar;
}

$conexion = conectarse();
 ?>