<?php
$codigo = $_POST["codigo_txt"];
$duracion = $_POST["duracion_txt"];
$nombre = $_POST["nombre_txt"];

$descripcion = $_POST["descripcion_txta"];
$incluye = $_POST["incluye_txta"];
$noincluye = $_POST["noincluye_txta"];
$opcional = $_POST["opcional_txta"];

$estado = $_POST["estado_rdo"];

$imagen_generica = "paquete.jpg";

$fecha=date("Y-m-d H:i:s a");

include("../../models/conexion.php");

$consulta = "SELECT * FROM tpaquetes WHERE codigo='$codigo'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 0) {

    include("funciones-paquete.php");

    $tipo = $_FILES["imagen_fls"]["type"];
    $archivo = $_FILES["imagen_fls"]["tmp_name"];
    $codigo_imagen =  str_replace(" ","-",$codigo);
    // $codigo1 = $codigo."1";
    $se_subio_imagen = subir_imagen($tipo,$archivo,$codigo_imagen);
    //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
    $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

    $consulta = "INSERT INTO tpaquetes (codigo,titulo,duracion,descripcion,incluye,noincluye,opcional,imagen,fecha,estado,descuento)
                VALUES ('$codigo','$nombre','$duracion','$descripcion','$incluye','$noincluye','$opcional','$imagen','$fecha','$estado','0')";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha dado de alta un nuevo paquete de codigo <b>$codigo</b>";
    }else {
        $mensaje = "No se ha podido dar de alta al paquete de codigo <b>$codigo</b>";
    }
}else {
    $mensaje = "No se ha podido dar de alta al paquete de codigo <b>$codigo</b> por que ya existe";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
?>