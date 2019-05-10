
        
        
            
            <div class="col-lg-6">
                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5>Paquetes Actuales</h5>
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Codigo</th>
                            <th>Titulo</th>
                            <th>Pagina de Inicio ?</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $estadoTipo = array("1" => "btn-success", "0" => "btn-warning");
                            $estadoTexto = array("1" => "si", "0" => "no");

                            $consulta = "SELECT * FROM tpaquetes ORDER BY estado desc";
                            $ejecutar_consulta = $conexion->query($consulta);

                            $i=1;
                            while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                echo '
                                <tr>
                                    <td>'.str_pad($i,3,'0',STR_PAD_LEFT).'</td>
                                    <td>'.$listado["codigo"].'</td>
                                    <td>'.ucwords(strtolower($listado["titulo"])).'</td>
                                    <td class="text-center"><button class="btn '.$estadoTipo[$listado["estado"]].' btn-xs" data-toggle="modal" data-target="#home'.$listado["idpaquetes"].'">'.$estadoTexto[$listado["estado"]].'</button></td>
                                    <td>
                                        <a href="frmpaquetes.php?op=alta-paquetes&codigo='.$listado["codigo"].'" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete'.$listado["idpaquetes"].'"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>

                                <!-- Modal Eliminar -->
                                <div class="modal" id="delete'.$listado["idpaquetes"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Eliminar Paquete</h6>
                                            </div>
                                            <div class="modal-body">
                                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/eliminar-paquete.php" method="post" enctype="multipart/form-data">
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                        <h6 class="text-center">Estas seguro de eliminar paquete?</h6>
                                                        <p class="text-center margin-top-30">Los datos del paquete <b>'.$listado["codigo"].'</b> se eliminaran permanentemente</p>


                                                        <input value="'.$listado["idpaquetes"].'" name="idpaquete_txt" type="hidden">
                                                        
                                                    </div>
                                                    <div class="row margin-top-30">
                                                        <input class="red" value="Eliminar"  type="submit" id="submit_btn">
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal Eliminar -->

                                <div class="modal fade" id="home'.$listado["idpaquetes"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">PAgina de inicio</h6>
                                            </div>
                                            <div class="modal-body clearfix">
                                                <form action="../php/add-home-page.php" method="post" id="formPaquete" name="formPaquete" enctype="multipart/form-data">
                                                    <div class="col-lg-12">

                                                        <p><i class="fa fa-home fa-4x text-success pull-left"></i> Esta seguro de <b>insertar o quitar</b> este paquete en la pagina de inicio?. El paquete se mostrara en la pagina de inicio...!!!</p>

                                                        <input type="hidden" name="idpaquetes_txt" value="'.$listado["idpaquetes"].'" class="form-control hide">
                                                        <input type="hidden" id="estado_txt" name="estado_txt" value="'.$listado["estado"].'" class="form-control hide">
                                                        
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn-success btn-sm pull-right">Agregar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3"></div>
        
