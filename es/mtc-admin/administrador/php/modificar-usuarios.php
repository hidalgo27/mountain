<?php

$idusuario = $_POST["idusuario_txt"];

$nombre = $_POST["nombre_txt"];
$apellidos = $_POST["apellidos_txt"];
$dni = $_POST["dni_txt"];
$email = $_POST["email_txt"];
$direccion = $_POST["direccion_txt"];
$telefono = $_POST["telefono_txt"];
$usuario = $_POST["usuario_txt"];
$contrasena = $_POST["contrasena_txt"];

$tipousuario = $_POST["tipousuario_slc"];

$op = $_POST["op_txt"];

$estado = "1";

include("../../models/conexion.php");

$consulta = "SELECT * FROM tusuario WHERE idusuario='$idusuario'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 1) {
    $consulta = "UPDATE tusuario SET nombre='$nombre',apellidos='$apellidos',dni='$dni',email='$email',direccion='$direccion',telefono='$telefono',usuario='$usuario',contrasenia='$contrasena',tipousuario='$tipousuario',estado='$estado'
                WHERE idusuario = '$idusuario'";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha modificado un usuario";
    }else {
        $mensaje = "No se ha podido modificar un usuario";
    }
}else {
    $mensaje = "No se ha podido modificar por que el usuario no existe";
}
$conexion->close();

if (isset($op)) {
    header("Location: ../views/frmpaquetes.php?op=alta-usuarios&mensaje=$mensaje");
}else {
    header("Location: ../views/frmpaquetes.php?op=perfil&mensaje=$mensaje");
}


?>