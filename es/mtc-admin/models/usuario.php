<?php 
	// echo $_SESSION["usuario"];
	// require("conexion.php");
	$conexion2 = conectarse();
	$contacto = $_SESSION["usuario"];
	$consulta_contacto = "SELECT * FROM tusuario WHERE usuario='$contacto'";
	// echo $consulta_contacto;
	$ejecutar_consulta_contacto = $conexion2->query($consulta_contacto);
	$registro_contacto = $ejecutar_consulta_contacto->fetch_assoc();
	echo "".$registro_contacto['nombre']." ".$registro_contacto['apellidos']."";

	$tipousuario = $registro_contacto['tipousuario'];
	$idusuario = $registro_contacto['idusuario'];

	// echo $_SESSION["usuario"]
	// $conexion->close();
?>