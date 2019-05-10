
            <div class="col-lg-6">
                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5>Categorias Actuales</h5>
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
                <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#nueva_categoria"> + Nueva Categoria</button>
                <!-- Modal agergar categria-->
                        <div class="modal fade" id="nueva_categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h6 class="modal-title" id="myModalLabel">Agregar Categoria</h6>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/agregar-categoria.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <input class="" id="nombre_txt" name="nombre_txt" type="text" placeholder="NOMBRE CATEGORIA" required>
                                            </div>
                                            <div class="row text-right">
                                                <input class="blue" value="Agregar Categoria"  type="submit" id="submit_btn">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Modal fin agergar categria-->
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

                            $consulta = "SELECT * FROM tcategoria ORDER BY nombre";
                            $ejecutar_consulta = $conexion->query($consulta);

                            $i=1;
                            while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                echo '
                                <tr>
                                    <td>'.str_pad($i,3,'0',STR_PAD_LEFT).'</td>
                                    <td>'.ucwords(strtolower($listado["nombre"])).'</td>
                                    
                                    <td class="text-center">

                                        <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit'.$listado["idcategoria"].'"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete'.$listado["idcategoria"].'"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>

                                <!-- Modal Eliminar -->
                                <div class="modal" id="delete'.$listado["idcategoria"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Eliminar categoria</h6>
                                            </div>
                                            <div class="modal-body">
                                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/eliminar-categoria.php" method="post" enctype="multipart/form-data">
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                        <h6 class="text-center">Estas seguro de eliminar categroia?</h6>
                                                        <p class="text-center margin-top-30">La categoria <b>"'.$listado["nombre"].'"</b> se eliminara permanentemente</p>


                                                        <input value="'.$listado["idcategoria"].'" name="idcategoria_txt" type="hidden">
                                                        
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
                                    <div class="modal fade" id="edit'.$listado["idcategoria"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h6 class="modal-title" id="myModalLabel">Editar Categoria</h6>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../php/modificar-categoria.php" method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <input name="nombre_txt" type="text" placeholder="NOMBRE CATEGORIA" required value="'.$listado["nombre"].'">
                                                            <input type="hidden" name="idcategoria_txt" value="'.$listado["idcategoria"].'">
                                                        </div>
                                                        <div class="row text-right">
                                                            <input class="blue" value="Modificar Categroia"  type="submit" id="submit_btn">
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
