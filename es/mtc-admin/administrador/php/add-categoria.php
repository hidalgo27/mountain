<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigo = $_POST["codigo_txt"];
    $idpaquetes = $_POST["idpaquetes_txt"];
    
   if (isset($_POST["categoria"])) {
       $categoria = $_POST["categoria"];
       $total_categoria = $categoria;
   }

   $count = count($total_categoria);

    include("../../models/conexion.php");

    $consulta = "SELECT * FROM tpaquetescategoria WHERE idpaquetes='$idpaquetes'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_regs = $ejecutar_consulta->num_rows;
    if ($num_regs == 0) {
        for ($i = 0; $i < $count; $i++) {

            $consulta = "INSERT INTO tpaquetescategoria (idpaquetes,idcategoria)
                        VALUES ('$idpaquetes','$total_categoria[$i]')";
            $ejecutar_consulta = $conexion->query($consulta);
            if ($ejecutar_consulta) {
                $mensaje = "Se ha asignado categoria";
            }else {
                $mensaje = "No se ha podido asignar categoria";
            }

        }
    }else {
        $consulta = "DELETE FROM tpaquetescategoria WHERE idpaquetes = '$idpaquetes'";
        $ejecutar_consulta = $conexion->query($consulta);

        if ($ejecutar_consulta) {

            for ($i = 0; $i < $count; $i++) {

                $consulta = "INSERT INTO tpaquetescategoria (idpaquetes,idcategoria)
                            VALUES ('$idpaquetes','$total_categoria[$i]')";
                $ejecutar_consulta = $conexion->query($consulta);
                if ($ejecutar_consulta) {
                    $mensaje = "Se ha asignado categoria";
                }else {
                    $mensaje = "No se ha podido asignar categoria";
                }
            }
        }
    }
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
?>