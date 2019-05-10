<?php

$codigo = $_POST["codigo_txt"];
$nombre = $_POST["nombre_txt"];

include("../../models/conexion.php");

$consulta = "SELECT * FROM tcategoria WHERE nombre='$nombre'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if ($num_regs == 0) {

    $consulta = "INSERT INTO tcategoria (nombre)
                VALUES ('$nombre')";

    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta) {
        $mensaje = "Se ha dado de alta categoria";
    }else {
        $mensaje = "No se ha podido dar de alta categoria";
    }

}else {
    $mensaje = "No se ha podido dar de alta categoria por que no existe";
}

$conexion->close();

if (isset($codigo)) {
    header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
}else {
    header("Location: ../views/frmpaquetes.php?op=alta-categorias&mensaje=$mensaje");
}
?>