<?php
    $idpaquete = $_POST["idpaquete_txt"];
    $codigo = $_POST["codigo_txt"];

    include("../../models/conexion.php");
    $consulta="DELETE FROM tpaquetes WHERE idpaquetes='$idpaquete'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "El paquete ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar el paquete :/";

    $conexion->close();
    header("Location: ../views/frmpaquetes.php?op=listar-paquetes&mensaje=$mensaje");
 ?>