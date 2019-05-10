<?php
    $codigo = $_GET["codigo"];
    $id = $_GET["id"];
    include("../../models/conexion.php");
    $consulta="DELETE FROM timagencrucero WHERE idimagenCrucero='$id'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "La imagen ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar la imagen :/";

    $conexion->close();
    header("Location: ../views/frmCrucero.php?op=alta-precioCrucero&codigo=$codigo&mensaje=$mensaje");
 ?>