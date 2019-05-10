<?php

$nombre = $_POST["nombre_txt"];
$apellidos = $_POST["apellidos_txt"];
$dni = $_POST["dni_txt"];
$email = $_POST["email_txt"];
$direccion = $_POST["direccion_txt"];
$telefono = $_POST["telefono_txt"];
$usuario = $_POST["usuario_txt"];
$contrasena = $_POST["contrasena_txt"];

$tipousuario = $_POST["tipousuario_slc"];

$estado = "1";

include("../../models/conexion.php");

$consulta = "SELECT * FROM tusuario WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if ($num_regs == 0) {
    $consulta = "INSERT INTO tusuario (nombre,apellidos,dni,email,direccion,telefono,usuario,contrasenia,tipousuario,estado)
                VALUES ('$nombre','$apellidos','$dni','$email','$direccion','$telefono','$usuario','$contrasena','$tipousuario','$estado')";
    $ejecutar_consulta = $conexion->query($consulta);
    if ($ejecutar_consulta) {
        $mensaje = "Se ha dado de alta un nuevo usuario";
    }else {
        $mensaje = "No se ha podido dar de alta a usuario";
    }
}else {
    $mensaje = "No se ha podido dar de alta al usuario por que ya excedio el maximo de sus registros";
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-usuarios&mensaje=$mensaje");
?>