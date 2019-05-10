<?php
$idcrucero = $_POST["idcrucero_txt"];
$codigo = $_POST["codigo_txt"];
$duracion = $_POST["duracion_txt"];
$acomodacion = $_POST["acomodacion_slc"];
$categoria = $_POST["categoria_txt"];

$incluye = $_POST["incluye_txta"];
$noIncluye = $_POST["noIncluye_txta"];

$precio = $_POST["precio_txt"];

include("../../models/conexion.php");

$consulta = "SELECT * FROM tcrucero WHERE idcrucero='$idcrucero'";
$ejecutar_consulta = $conexion->query($consulta);
$registro = $ejecutar_consulta->fetch_assoc();
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {
    $consulta = "INSERT INTO tpreciocrucero (duracion,categoria,acomodacion,precio,incluye,noIncluye,idcrucero)
                VALUES ('$duracion','$categoria','$acomodacion','$precio','$incluye','$noIncluye','$idcrucero')";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha agregado un precio";
    }else {
        $mensaje = "No se ha agregado precio";
    }
}else {
    $mensaje = "No se ha podido dar de alta por que no existe el paquete";
}
$conexion->close();
header("Location: ../views/frmCrucero.php?op=alta-precioCrucero&codigo=$codigo&mensaje=$mensaje");
?>