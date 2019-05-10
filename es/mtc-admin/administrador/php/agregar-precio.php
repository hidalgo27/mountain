<?php
$idpaquetes = $_POST["idpaquetes_txt"];
$codigo = $_POST["codigo_txt"];

$star2 = $_POST["star2_txt"];
$star3 = $_POST["star3_txt"];
$star4 = $_POST["star4_txt"];
$star5 = $_POST["star5_txt"];

$fecha = $_POST["fecha_txt"];

$titulo = $_POST["titulo_txt"];
$descripcion = $_POST["descripcion_txta"];


include("../../models/conexion.php");

$consulta = "SELECT * FROM tpreciopaquetes WHERE idpaquetes='$idpaquetes'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 0) {
    $consulta = "INSERT INTO tpreciopaquetes (estrellas,precio,idpaquetes)
                VALUES 
                ('2','$star2','$idpaquetes'),
                ('3','$star3','$idpaquetes'),
                ('4','$star4','$idpaquetes'),
                ('5','$star5','$idpaquetes')";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha dado de alta precio";
    }else {
        $mensaje = "No se ha podido dar de alta precio";
    }
}else {
    $mensaje = "No se ha podido dar de alta precio por que no existe";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
?>