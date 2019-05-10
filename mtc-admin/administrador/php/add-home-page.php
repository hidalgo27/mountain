<?php
$idpaquetes = $_POST["idpaquetes_txt"];
$estado = $_POST["estado_txt"];

if ($estado == '1') {
	$estado = '0';
}elseif ($estado == '0'){
	$estado = '1';
}

require("../../models/conexion.php");

$consulta = "SELECT * FROM tpaquetes WHERE idpaquetes = '$idpaquetes'";
$ejecutar_consulta = $conexion->query($consulta);
$num_registros = $ejecutar_consulta->num_rows;

if ($num_registros==1) {
	
	$consulta2 = "UPDATE tpaquetes SET estado='$estado' WHERE idpaquetes = '$idpaquetes'";
	//echo $consulta2;
	$ejecutar_consulta2 = $conexion->query($consulta2);

	if ($ejecutar_consulta2) {
		$mensaje = "Se ha actualizado el incio de pagina";
	}else{
		$mensaje = "No se pudo actualizar el inicio de pagina";
	}
}else{
	$mensaje = "No se pudo actualizar el inicio de pagina  por que el paquete no tiene registro :/";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=listar-paquetes&mensaje=$mensaje");
?>