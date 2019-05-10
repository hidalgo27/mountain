<?php
$idpaquetes = $_POST["idpaquetes_txt"];
$codigo = $_POST["codigo_txt"];

$dia = $_POST["dia_txt"];

$titulo = $_POST["titulo_txt"];
$descripcion = $_POST["descripcion_iti_txta"];

$imagen_generica = "itinerario.jpg";

include("../../models/conexion.php");

$consulta = "SELECT * FROM titinerario WHERE idpaquetes='$idpaquetes' AND dia = '$dia'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 0) {

    include("funciones-itinerario.php");

    $tipo = $_FILES["imagen_fls"]["type"];
    $archivo = $_FILES["imagen_fls"]["tmp_name"];
    $codigo_imagen =  str_replace(" ","-",$codigo."-".$dia);
    // $codigo1 = $codigo."1";
    $se_subio_imagen = subir_imagen($tipo,$archivo,$codigo_imagen);
    //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
    $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

    $consulta = "INSERT INTO titinerario (dia,titulo,descripcion,imagen,idpaquetes)
                VALUES ('$dia','$titulo','$descripcion','$imagen','$idpaquetes')";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha dado de alta un nuevo itinerario";
    }else {
        $mensaje = "No se ha podido dar de alta a itinerario";
    }
}else {
    $mensaje = "No se ha podido dar de alta al itinerario por que ya excedio el maximo de sus registros";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&dia=$dia&mensaje=$mensaje");
?>