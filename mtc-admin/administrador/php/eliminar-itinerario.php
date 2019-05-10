<?php
    $iditinerario = $_POST["iditinerario_txt"];
    $codigo = $_POST["codigo_txt"];

    $dia = $_POST["dia_txt"]-1;

    include("../../models/conexion.php");
    $consulta="DELETE FROM titinerario WHERE iditinerario='$iditinerario'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "El itinerario ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar El itinerario :/";

    $conexion->close();
    header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&dia=$dia&mensaje=$mensaje");
 ?>