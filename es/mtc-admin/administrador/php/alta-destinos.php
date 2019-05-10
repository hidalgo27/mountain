  
            <div class="col-lg-6">
                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5>Destinos Actuales</h5>
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
                <button class="btn btn-success btn-xs" type="button" data-toggle="modal" data-target="#nuevo_destino"> + Nuevo Destino</button>
                <!-- Modal agergar destino-->
                        <div class="modal fade" id="nuevo_destino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h6 class="modal-title" id="myModalLabel">Agregar destino</h6>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/agregar-destino.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <input class="" id="nombre_txt" name="nombre_txt" type="text" placeholder="NOMBRE DESTINO" required>
                                            </div>
                                            <div class="row hide">
                                                <div class="col-lg-6 padding-left-0">
                                                    <input class="" name="region_txt" type="text" placeholder="REGION">
                                                </div>
                                                <div class="col-lg-6 padding-right-0">
                                                    <input class="" name="pais_txt" type="text" placeholder="PAIS">
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <textarea name="descripcion_destino_txta" placeholder="DESCRIPCION"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 padding-left-0">
                                                    <label class="text-info">Imagen 1</label>
                                                    (dimension 675 X 628 pixeles)
                                                    <input type="file" class="row" name="foto1_fls">
                                                </div>
                                                <div class="col-lg-6 padding-right-0">
                                                    <label class="text-info">Imagen 2</label>
                                                    (dimension 1465 X 314 pixeles)
                                                    <input type="file" class="row" name="foto2_fls">
                                                </div>
                                            </div>
                                            <div class="row text-right">
                                                <input class="blue" value="Agregar Destino"  type="submit" id="submit_btn">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal fin agergar destino-->
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $estadoTipo = array("1" => "btn-info", "0" => "btn-warning");
                            $estadoTexto = array("1" => "si", "0" => "no");

                            $consulta = "SELECT * FROM tdestinos ORDER BY nombre";
                            $ejecutar_consulta = $conexion->query($consulta);

                            $i=1;
                            while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                echo '
                                <tr>
                                    <td>'.str_pad($i,3,'0',STR_PAD_LEFT).'</td>
                                    <td>'.ucwords(strtolower($listado["nombre"])).'</td>
                                    
                                    <td class="text-center">

                                        <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit'.$listado["iddestinos"].'"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete'.$listado["iddestinos"].'"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>

                                <!-- Modal Eliminar -->
                                <div class="modal" id="delete'.$listado["iddestinos"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Eliminar Destino</h6>
                                            </div>
                                            <div class="modal-body">
                                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/eliminar-destino.php" method="post" enctype="multipart/form-data">
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                        <h6 class="text-center">Estas seguro de eliminar destino?</h6>
                                                        <p class="text-center margin-top-30">El destino <b>"'.$listado["nombre"].'"</b> se eliminara permanentemente</p>


                                                        <input value="'.$listado["iddestinos"].'" name="iddestinos_txt" type="hidden">
                                                        
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

                                <!-- Modal editar destino-->
                                    <div class="modal fade" id="edit'.$listado["iddestinos"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h6 class="modal-title" id="myModalLabel">Editar destino</h6>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../php/modificar-destino.php" method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <input name="nombre_txt" type="text" placeholder="NOMBRE DESTINO" required value="'.$listado["nombre"].'">
                                                            <input type="hidden" name="iddestino_txt" value="'.$listado["iddestinos"].'">
                                                        </div>
                                                        <div class="row hide">
                                                            <div class="col-lg-6 padding-left-0">
                                                                <input class="" name="region_txt" type="text" placeholder="REGION">
                                                            </div>
                                                            <div class="col-lg-6 padding-right-0">
                                                                <input class="" name="pais_txt" type="text" placeholder="PAIS">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <textarea name="edit_destino_txta" placeholder="DESCRIPCION">'.$listado["descripcion"].'</textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 padding-left-0">
                                                                <label class="text-info">Imagen 1</label>
                                                                (dimension 675 X 628 pixeles)
                                                                <input type="file" name="foto1_fls">
                                                                <input type="hidden" name="foto1_hdn" value="'.$listado["imagen1"].'">
                                                                <img src="../../../img/destinos/'.$listado["imagen1"].'" alt="">
                                                            </div>
                                                            <div class="col-lg-6 padding-right-0">
                                                                <label class="text-info">Imagen 2</label>
                                                                (dimension 1465 X 314 pixeles)
                                                                <input type="file" name="foto2_fls">
                                                                <input type="hidden" name="foto2_hdn" value="'.$listado["imagen2"].'">
                                                                <img src="../../../img/destinos/'.$listado["imagen2"].'" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="row text-right">
                                                            <input class="blue" value="Modificar Destino"  type="submit" id="submit_btn">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Modal fin editar destino-->
                                ';
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3"></div>