<?php
$idprecio = $_POST["idprecio_txt"];
$codigo = $_POST["codigo_txt"];

$precio = $_POST["precio_txt"];


include("../../models/conexion.php");

$consulta = "SELECT * FROM tpreciopaquetes WHERE idprecio='$idprecio'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {
    $consulta = "UPDATE tpreciopaquetes SET precio='$precio' WHERE idprecio = '$idprecio'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha modificado precio";
    }else {
        $mensaje = "No se ha podido modificar precio";
    }
}else {
    $mensaje = "No se ha podido modificar precio por que no existe";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
?>