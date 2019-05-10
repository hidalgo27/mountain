<?php
$server = "localhost";//nombre del servidor
$usuario = "root";//nombre del usuario
$pwd = "";//contraseña de mysql
$db = "dbgoto";//nombre de la base de datos, en nuestro caso se llama autocompleta
$cn = mysqli_connect($server,$usuario,$pwd);
	
	if($cn){
	}else{
		echo "No hay Conexion";
}
$base = mysqli_select_db($cn,$db);
	if($base){
	}else{
		echo "Error en la base de datos";
}
?>