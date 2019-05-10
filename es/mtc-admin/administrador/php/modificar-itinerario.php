<?php
$iditinerario = $_POST["iditinerario_txt"];
$codigo = $_POST["codigo_txt"];

$dia_get = $_POST["dia_get_txt"];

$dia = $_POST["dia_txt"];
$titulo = $_POST["titulo_txt"];
$descripcion = $_POST["descripcion_iti_txta"];

include("../../models/conexion.php");

$consulta = "SELECT * FROM titinerario WHERE iditinerario='$iditinerario'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {

    if (empty($_FILES["foto_fls"]["tmp_name"])) {
        $imagen = $_POST["foto_hdn"];
    }else{
    //Se ejecuta la funcion para subir la imagen
        include("funciones-itinerario.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];
        $codigo_imagen =  str_replace(" ","-",$codigo."-".$dia);
        $imagen = subir_imagen($tipo,$archivo,$codigo_imagen);
    }

    $consulta = "UPDATE titinerario SET dia='$dia',titulo='$titulo',descripcion='$descripcion',imagen='$imagen' WHERE iditinerario = '$iditinerario'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha modificado un itinerario";
    }else {
        $mensaje = "No se ha modificado itinerario";
    }
}else {
    $mensaje = "No se ha podido modificar por que no existe el itinerario";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&dia=$dia_get&mensaje=$mensaje");
?>