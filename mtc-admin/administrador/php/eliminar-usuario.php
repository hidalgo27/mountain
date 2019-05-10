<?php
    $idusuario = $_POST["idusuario_txt"];
    $codigo = $_POST["codigo_txt"];

    include("../../models/conexion.php");
    $consulta="DELETE FROM tusuario WHERE idusuario='$idusuario'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "El usuario ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar el usuario :/";

    $conexion->close();
    header("Location: ../views/frmpaquetes.php?op=alta-usuarios&mensaje=$mensaje");
 ?>