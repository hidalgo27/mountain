<?php
$idprecioCrucero = $_POST["idprecioCrucero_txt"];
$codigo = $_POST["codigo_txt"];
$duracion = $_POST["duracion_txt"];
$acomodacion = $_POST["acomodacion_slc"];
$categoria = $_POST["categoria_txt"];

$incluye = $_POST["incluye_edit_txta"];
$noIncluye = $_POST["noIncluye_edit_txta"];

$precio = $_POST["precio_txt"];

include("../../models/conexion.php");

$consulta = "SELECT * FROM tpreciocrucero WHERE idprecioCrucero='$idprecioCrucero'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {
    $consulta = "UPDATE tpreciocrucero SET duracion='$duracion',categoria='$categoria',acomodacion='$acomodacion',precio='$precio',incluye='$incluye',noIncluye='$noIncluye' WHERE idprecioCrucero = '$idprecioCrucero'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha modificado un precio";
    }else {
        $mensaje = "No se ha modificado precio";
    }
}else {
    $mensaje = "No se ha podido modificar por que no existe el paquete";
}
$conexion->close();
header("Location: ../views/frmCrucero.php?op=alta-precioCrucero&codigo=$codigo&mensaje=$mensaje");
?>