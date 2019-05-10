<?php
$codigo = $_POST["codigo_txt"];
$idcrucero = $_POST["idcrucero_txt"];

$nombre = $_POST["nombre_txt"];


$imagen_generica = "destino.jpg";

include("../../models/conexion.php");

$consulta = "SELECT * FROM timagencrucero WHERE nombre='$nombre'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 0) {

    include("funciones-crucero.php");
    $tipo = $_FILES["imagen_fls"]["type"];
    $archivo = $_FILES["imagen_fls"]["tmp_name"];
    $nombre_imagen =  str_replace(" ","-",$nombre);
    // $codigo1 = $codigo."1";
    $se_subio_imagen = subir_imagen($tipo,$archivo,$nombre_imagen);
    //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
    $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

    $consulta = "INSERT INTO timagencrucero (nombre,imagen,idcrucero)
                VALUES ('$nombre','$imagen','$idcrucero')";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha dado de alta una nueva imagen";
    }else {
        $mensaje = "No se ha podido dar de alta esta imagen";
    }
}else {
    $mensaje = "No se ha podido dar de alta por que ya existe una imagen con el mismo nombre";
}
$conexion->close();
header("Location: ../views/frmCrucero.php?op=alta-precioCrucero&codigo=$codigo&mensaje=$mensaje");
?>