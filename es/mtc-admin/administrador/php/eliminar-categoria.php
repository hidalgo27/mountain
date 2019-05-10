<?php
    $idcategoria = $_POST["idcategoria_txt"];
    $codigo = $_POST["codigo_txt"];

    include("../../models/conexion.php");
    $consulta="DELETE FROM tcategoria WHERE idcategoria='$idcategoria'";
    $ejecutar_consulta = $conexion->query($consulta);

    if ($ejecutar_consulta)
        $mensaje = "La categoria ha sido eliminado :(";
    else
        $mensaje = "No se pudo eliminar la categoria :/";

    $conexion->close();
    header("Location: ../views/frmpaquetes.php?op=alta-categorias&mensaje=$mensaje");
 ?>