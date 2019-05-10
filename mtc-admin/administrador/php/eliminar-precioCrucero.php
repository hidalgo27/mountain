<?php
    $idprecioCrucero = $_POST["idprecioCrucero_txt"];
    $codigo = $_POST["codigo_txt"];
    include("../../models/conexion.php");
    $consulta="DELETE FROM tpreciocrucero WHERE idprecioCrucero='$idprecioCrucero'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "El precio ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar El precio :/";

    $conexion->close();
    header("Location: ../views/frmCrucero.php?op=alta-precioCrucero&codigo=$codigo&mensaje=$mensaje");
 ?>