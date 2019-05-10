<?php
$idpaquetes = $_POST["idpaquetes_txt"];
$codigo = $_POST["codigo_txt"];
$duracion = $_POST["duracion_txt"];
$nombre = $_POST["nombre_txt"];

$descripcion = $_POST["descripcion_edit_txta"];
$incluye = $_POST["incluye_edit_txta"];
$noincluye = $_POST["noincluye_edit_txta"];
$opcional = $_POST["opcional_edit_txta"];

$estado = $_POST["estado_rdo"];

$fecha=date("Y-m-d H:i:s a");

include("../../models/conexion.php");

$consulta = "SELECT * FROM tpaquetes WHERE idpaquetes='$idpaquetes'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {

    if (empty($_FILES["foto_fls"]["tmp_name"])) {
        $imagen = $_POST["foto_hdn"];
    }else{
    //Se ejecuta la funcion para subir la imagen
        include("funciones-paquete.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];
        $codigo =  str_replace(" ","-",$codigo);
        $imagen = subir_imagen($tipo,$archivo,$codigo);
    }

    $consulta = "UPDATE tpaquetes SET codigo='$codigo',titulo='$nombre',duracion='$duracion',descripcion='$descripcion',incluye='$incluye',noincluye='$noincluye',opcional='$opcional',imagen='$imagen',fecha='$fecha',estado='$estado' WHERE idpaquetes='$idpaquetes'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha modificado paquete";
    }else {
        $mensaje = "No se ha podido modificar el paquete";
    }
}else {
    $mensaje = "No se ha podido modificar por que no existe paquete";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
?>