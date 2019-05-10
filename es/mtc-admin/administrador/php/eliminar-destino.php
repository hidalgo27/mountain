<?php
    $iddestinos = $_POST["iddestinos_txt"];
    $codigo = $_POST["codigo_txt"];

    include("../../models/conexion.php");
    $consulta="DELETE FROM tdestinos WHERE iddestinos='$iddestinos'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "El destino ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar el destino :/";

    $conexion->close();
    header("Location: ../views/frmpaquetes.php?op=alta-destinos&mensaje=$mensaje");
 ?>