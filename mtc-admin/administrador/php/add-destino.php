<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $codigo = $_POST["codigo_txt"];
    $idpaquetes = $_POST["idpaquetes_txt"];
    

   if (isset($_POST["destinos"])) {
       $destinos = $_POST["destinos"];
       $total_destinos = $destinos;
   }

   $count = count($total_destinos);

    include("../../models/conexion.php");

    $consulta = "SELECT * FROM tpaquetesdestinos WHERE idpaquetes='$idpaquetes'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_regs = $ejecutar_consulta->num_rows;
    if ($num_regs == 0) {
        for ($i = 0; $i < $count; $i++) {

            $consulta = "INSERT INTO tpaquetesdestinos (idpaquetes,iddestinos)
                        VALUES ('$idpaquetes','$total_destinos[$i]')";
            $ejecutar_consulta = $conexion->query($consulta);
            if ($ejecutar_consulta) {
                $mensaje = "Se ha asignado destino";
            }else {
                $mensaje = "No se ha podido asignar destino";
            }

        }
    }else {
        $consulta = "DELETE FROM tpaquetesdestinos WHERE idpaquetes = '$idpaquetes'";
        $ejecutar_consulta = $conexion->query($consulta);

        if ($ejecutar_consulta) {

            for ($i = 0; $i < $count; $i++) {

                $consulta = "INSERT INTO tpaquetesdestinos (idpaquetes,iddestinos)
                            VALUES ('$idpaquetes','$total_destinos[$i]')";
                $ejecutar_consulta = $conexion->query($consulta);
                if ($ejecutar_consulta) {
                    $mensaje = "Se ha asignado destino";
                }else {
                    $mensaje = "No se ha podido asignar destino";
                }

            }

        }
    }
}
$conexion->close();
header("Location: ../views/frmpaquetes.php?op=alta-paquetes&codigo=$codigo&mensaje=$mensaje");
?>