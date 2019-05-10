<?php
//Asigno a variables php los valores q vivnen del form
$codigo = $_POST["codigo_txt"];
$nombre = $_POST["nombre_txt"];

$region = "sur";
$pais = "peru";

$descripcion = $_POST["descripcion_destino_txta"];

//depemndiedno el sexo ponemos una imagen predeterminada

//verificamos que no exista previamente el email del usuario en la base de datos
include("../../models/conexion.php");
$consulta = "SELECT * FROM tdestinos WHERE nombre='$nombre'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
//si $num_regs es iagual a 0, insertamos datos en la tabla, sino mandamos un mensaje q diga que el usuario existe
if ($num_regs == 0) {
    //Se ejecuta la funcion para subir la imagen
    include("funciones-destinos.php");
    $tipo1 = $_FILES["foto1_fls"]["type"];
    $archivo1 = $_FILES["foto1_fls"]["tmp_name"];
    $nombre1 =  str_replace(" ","-",$nombre."1");
    // $codigo1 = $codigo."1";
    $se_subio_imagen1 = subir_imagen($tipo1,$archivo1,$nombre1);
    //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
        $imagen1 = empty($archivo1)?$imagen_generica:$se_subio_imagen1;

    $tipo2 = $_FILES["foto2_fls"]["type"];
    $archivo2 = $_FILES["foto2_fls"]["tmp_name"];
    $nombre2 =  str_replace(" ","-",$nombre."2");
    // $codigo2 = $codigo."2";
    $se_subio_imagen2 = subir_imagen($tipo2,$archivo2,$nombre2);
    //si la foto en el formulario viene vacia, entonces le asigno el valor de la imagen generica, sino entonces el nombre de la foto que se subio(
        $imagen2 = empty($archivo2)?$imagen_generica:$se_subio_imagen2;

            $consulta = "INSERT INTO tdestinos (nombre,region,pais,descripcion,imagen1,imagen2,estado) VALUES ('$nombre','$region','$pais','$descripcion','$imagen1','$imagen2','1')";
            /*echo $consulta;*/
            $ejecutar_consulta = $conexion->query($consulta);
            if ($ejecutar_consulta)
                $mensaje = "Se ha dado de alta al destino con el nombre <b>$nombre</b> :)  ";
            else
                $mensaje = "No se pudo dar de alta al destino con el nombre <b>$nombre</b> :(";
}else{
    $mensaje = "No se pudo dar de alta al destino con el nombre <b>$nombre</b> por que ya tiene el maximo de sus registros :/";
}
$conexion->close();
if (isset($codigo)) {
    header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
}else {
    header("Location: ../views/frmpaquetes.php?op=alta-destinos&mensaje=$mensaje");
}

 ?>