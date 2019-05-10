<?php
$idcategoria = $_POST["idcategoria_txt"];
$nombre = $_POST["nombre_txt"];


include("../../models/conexion.php");

$consulta = "SELECT * FROM tcategoria WHERE idcategoria='$idcategoria'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {
    $consulta = "UPDATE tcategoria SET nombre='$nombre' WHERE idcategoria = '$idcategoria'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha modificado la categoria";
    }else {
        $mensaje = "No se ha podido modificar la categoria";
    }
}else {
    $mensaje = "No se ha podido modificar categoria por que no existe";
}
$conexion->close();

if (isset($codigo)) {
    header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
}else {
    header("Location: ../views/frmpaquetes.php?op=alta-categorias&mensaje=$mensaje");
}

?>