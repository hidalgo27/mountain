<?php
//Asigno a variables php los valores q vivnen del form
$nombre = $_POST["nombre_txt"];
$descripcion = $_POST["edit_destino_txta"];


$iddestino = $_POST["iddestino_txt"];

//verificamos que no exista previamente el email del usuario en la base de datos
require("../../models/conexion.php");
$consulta = "SELECT * FROM tdestinos WHERE iddestinos='$iddestino'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
//si $num_regs es iagual a 0, insertamos datos en la tabla, sino mandamos un mensaje q diga que el usuario existe
if ($num_regs == 1) {
    //Se ejecuta la funcion para subir la imagen
    include("funciones-destinos.php");
    if (empty($_FILES["foto1_fls"]["tmp_name"])) {
        $imagen1 = $_POST["foto1_hdn"];
    }else{
        $tipo1 = $_FILES["foto1_fls"]["type"];
        $archivo1 = $_FILES["foto1_fls"]["tmp_name"];
        $nombre1 =  str_replace(" ","-",$nombre."1");
        // $codigo1 = $codigo."1";
        $imagen1 = subir_imagen($tipo1,$archivo1,$nombre1);
    }
    //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
    if (empty($_FILES["foto2_fls"]["tmp_name"])) {
        $imagen2 = $_POST["foto2_hdn"];
    }else{
        $tipo2 = $_FILES["foto2_fls"]["type"];
        $archivo2 = $_FILES["foto2_fls"]["tmp_name"];
        $nombre2 =  str_replace(" ","-",$nombre."2");
        // $codigo2 = $codigo."2";
        $imagen2 = subir_imagen($tipo2,$archivo2,$nombre2);
        //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
    }

    $consulta = "UPDATE tdestinos SET nombre='$nombre',region='sur',pais='peru',descripcion='$descripcion',imagen1='$imagen1',imagen2='$imagen2',estado='1' WHERE iddestinos='$iddestino'";
    /*echo $consulta;*/
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta)
        $mensaje = "Se ha realizado los cambios al destino con el nombre <b>$nombre</b> :)";
    else
        $mensaje = "No se modifico el destino con el nombre <b>$nombre</b> :(";
}else{
    $mensaje = "No se pudo modificar el destino con el nombre <b>$nombre</b> por que ya tiene el maximo de sus registros :/";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-destinos&mensaje=$mensaje");
 ?>