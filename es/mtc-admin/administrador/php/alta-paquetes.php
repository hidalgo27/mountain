<?php
    if (isset($_GET["codigo"])) {
        $codigo = $_GET["codigo"];

        $consulta = "SELECT * FROM tpaquetes WHERE codigo = '$codigo'";
        $ejecutar_consulta = $conexion->query($consulta);
        $registro = $ejecutar_consulta->fetch_assoc();
    }
?>
            
            
            <div class="col-lg-6">
                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30">
                        <?php
                            if (isset($_GET["codigo"])) {
                                echo '
                                    <div class="row">
                                        <button href="" class="btn btn-link  pull-right" data-toggle="modal" data-target="#eliminar-paquetes">eliminar</button>
                                        <a href="" class="btn btn-link pull-right" data-toggle="modal" data-target="#editar-paquetes">editar</a>
                                    </div>
                                    <h5>'.$registro["titulo"].'</h5>
                                    <div class="sec-title-div-1"></div>
                                    <p><b>Duracion:</b> '.$registro["duracion"].' | Pagina de Inicio:</b> '.$registro["estado"].'</p>
                                    <p class="margin-top-30">'.$registro["descripcion"].'</p>
                                    <p><b></p>
                                ';
                            }else {
                                echo '<h5>Agregar Paquete</h5>
                                <div class="sec-title-div-1"></div>
                                ';
                            }
                        ?>
                    </div>
                    <!-- Button trigger modal -->
                    <?php
                        if (!isset($_GET["codigo"])) {
                            echo '
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#agregar-paquetes">
                                    + Nuevo Paquete
                                </button>
                            ';
                        }
                    ?>

                    <!-- Modal agregar paquete-->
                    <div class="modal fade" id="agregar-paquetes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h6 class="modal-title" id="myModalLabel">Agregar nuevo paquete</h6>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/agregar-paquete.php" method="post" enctype="multipart/form-data">
                                        <div id="contact_form" >
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="codigo_txt">CODIGO</label>
                                                    <input class="" required="required" id="codigo_txt" name="codigo_txt" placeholder="EJM:GC001" type="text">
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="duracion_txt">DURACION</label>
                                                    <input class="" id="duracion_txt" name="duracion_txt" type="number" min="0" step="1" required>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label  for="nombre_txt">NOMBRE PAQUETE</label>
                                                    <input class="" required="required" id="nombre_txt" name="nombre_txt" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="descripcion_txta">DESCRIPCION</label>
                                                    <textarea name="descripcion_txta" id="descripcion_txta"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="incluye_txta">INCLUYE</label>
                                                    <textarea name="incluye_txta" id="incluye_txta"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="noincluye_txta">NO INCLUYE</label>
                                                    <textarea name="noincluye_txta" id="noincluye_txta"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="opcional_txta">OPCIONAL</label>
                                                    <textarea name="opcional_txta" id="opcional_txta"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label>PAGINA DE INICO</label>
                                                    <div class="row margin-top-10 text-center">
                                                        <label class="radio-inline">
                                                          <input type="radio" name="estado_rdo" id="estado_rdo" value="1"> Si
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="estado_rdo" id="estado_rdo" value="0"> No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label>Imagen</label>
                                                    (dimension requerida 500 X 338 pixeles)
                                                    <input type="file" class="row" name="imagen_fls">
                                                </div>
                                            </div>
                                            <div class="row margin-top-30">
                                                <div class="col-lg-12">
                                                    <input class="blue" value="Agregar y continuar"  type="submit" id="submit_btn">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                    </div>
                    <!-- Fin modal agregar paquete-->

                    <!-- Modal eliminar paquete-->
                    <div class="modal fade" id="eliminar-paquetes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h6 class="modal-title" id="myModalLabel">Eliminar paquete</h6>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/eliminar-paquete.php" method="post" enctype="multipart/form-data">
                                        <div id="contact_form" >
                                            <div class="row">
                                                <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                <h6 class="text-center">Estas seguro de eliminar paquete?</h6>

                                                <p class="text-center margin-top-30">Los datos del paquete de codigo <b class="text-danger"><?php echo $registro["codigo"]; ?></b> se eliminaran permanentemente</p>

                                                <div class="hide">
                                                    <input name="idpaquete_txt" type="hidden" value="<?php echo $registro["idpaquetes"] ?>">
                                                    <input name="codigo_txt" type="hidden" value="<?php echo $registro["codigo"] ?>">
                                                </div>
                                                
                                            </div>
                                            <div class="row margin-top-30">
                                                <div class="col-lg-12">
                                                    <input class="blue" value="Eliminar"  type="submit" id="submit_btn">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                    </div>
                    <!-- Fin modal eliminar paquete-->

                    <!-- Modal modificar paquete-->
                    <div class="modal fade" id="editar-paquetes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h6 class="modal-title" id="myModalLabel">Editar paquete</h6>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/modificar-paquete.php" method="post" enctype="multipart/form-data">
                                        <div id="contact_form" >
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="codigo_txt">CODIGO</label>
                                                    <input class="" required="required" name="codigo_txt" placeholder="EJM:GC001" type="text" value="<?php echo $registro["codigo"] ?>">

                                                    <input  name="idpaquetes_txt" type="hidden" value="<?php echo $registro["idpaquetes"] ?>">

                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <img src="<?php echo"../../../img/paquetes/".$registro["imagen"]; ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="duracion_txt">DURACION</label>
                                                    <input class="" name="duracion_txt" type="number" min="0" step="1" required value="<?php echo $registro["duracion"] ?>">
                                                </div>
                                                <div class="col-lg-8">
                                                    <label  for="nombre_txt">NOMBRE PAQUETE</label>
                                                    <input class="" required="required" name="nombre_txt" placeholder="" type="text" value="<?php echo $registro["titulo"] ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="descripcion_edit_txta">DESCRIPCION</label>
                                                    <textarea name="descripcion_edit_txta"><?php echo $registro["descripcion"] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="incluye_edit_txta">INCLUYE</label>
                                                    <textarea name="incluye_edit_txta"><?php echo $registro["incluye"] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="noincluye_edit_txta">NO INCLUYE</label>
                                                    <textarea name="noincluye_edit_txta"><?php echo $registro["noincluye"] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="opcional_edit_txta">OPCIONAL</label>
                                                    <textarea name="opcional_edit_txta"><?php echo $registro["opcional"] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label>PAGINA DE INICO</label>
                                                    <div class="row margin-top-10 text-center">
                                                        <label class="radio-inline">
                                                          <input type="radio" name="estado_rdo" id="estado_rdo" value="1" <?php if($registro["estado"]=="1"){echo "checked";} ?>> Si
                                                              
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="estado_rdo" id="estado_rdo" value="0" <?php if($registro["estado"]=="0"){echo "checked";} ?>> No
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label>Imagen</label>
                                                    (dimension requerida 500 X 338 pixeles)
                                                    <input type="file" class="row" name="foto_fls">
                                                    <input type="hidden" name="foto_hdn" value="<?php echo $registro["imagen"]; ?>">
                                                </div>
                                            </div>
                                            <div class="row margin-top-30">
                                                <div class="col-lg-12">
                                                    <input class="blue" value="Modificar"  type="submit" id="submit_btn">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                    </div>
                    <!-- Fin modal modificar paquete-->
                </div>

                <!-- precios -->
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                    <?php
                        $consulta = "SELECT * FROM tpreciopaquetes WHERE idpaquetes = '$registro[idpaquetes]'";
                        $ejecutar_consulta = $conexion->query($consulta);
                        $reg_precio = $ejecutar_consulta->num_rows;

                        if ($reg_precio >1) {
                            echo '
                                <table class="table table-striped table-bordered table-hover table-condensed">
                                    <thead>
                                        <th>Estrellas</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </thead>
                                    <tbody>';
                                        while ($registro_precio = $ejecutar_consulta->fetch_assoc()) {
                                            echo '
                                            <tr>
                                                <td class="text-center">'.$registro_precio["estrellas"].' <i class="fa fa-star-o"></i></td>
                                                <td class="text-right">'.$registro_precio["precio"].'</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-link btn-xs" data-toggle="modal" data-target="#precio'.$registro_precio["idprecio"].'">Editar</button>
                                                </td>
                                            </tr>

                                            <!-- Modal editar precio-->
                                                <div class="modal fade" id="precio'.$registro_precio["idprecio"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h6 class="modal-title" id="myModalLabel">Editar precio paquete</h6>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form role="form" id="alta-paquetes" name="alta_frm" action="../php/modificar-precio.php" method="post" enctype="multipart/form-data">
                                                                    <div id="contact_form">
                                                                        
                                                                        <div class="row">
                                                                            
                                                                            <div class="col-lg-12">
                                                                                <label  for="star2_txt">'.$registro_precio["estrellas"].' estrellas</label>
                                                                                <input name="precio_txt" placeholder="" type="number" min="0" step="1" value="'.$registro_precio["precio"].'">
                                                                                
                                                                                <input name="idprecio_txt" type="hidden" value="'.$registro_precio["idprecio"].'">
                                                                                <input name="codigo_txt" type="hidden" value="'.$registro["codigo"].'">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="row margin-top-30">
                                                                            <div class="col-lg-12">
                                                                                <input class="blue" value="Agregar precio"  type="submit" id="submit_btn">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                            <!-- Fin modal editar precio-->
                                            ';
                                        }
                                        
                                    echo '</tbody>
                                </table>
                            ';
                        }else if(isset($_GET["codigo"])){
                            echo '
                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#agregar-precio">
                                    + Agregar Precio
                                </button>
                            ';
                        }
                    ?>
                    </div>
                    <!-- Modal agregar paquete-->
                    <div class="modal fade" id="agregar-precio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h6 class="modal-title" id="myModalLabel">Agregar precio paquete</h6>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/agregar-precio.php" method="post" enctype="multipart/form-data">
                                        <div id="contact_form">
                                            
                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <label  for="star2_txt">2 estrellas</label>
                                                    <input name="star2_txt" placeholder="" type="number" min="0" step="1">
                                                    <input name="idpaquetes_txt" type="hidden" value="<?php echo $registro["idpaquetes"] ?>">
                                                    <input name="codigo_txt" type="hidden" value="<?php echo $registro["codigo"] ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label  for="star3_txt">3 estrellas</label>
                                                    <input name="star3_txt" placeholder="" type="number" min="0" step="1">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label  for="star4_txt">4 estrellas</label>
                                                    <input name="star4_txt" placeholder="" type="number" min="0" step="1">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label  for="star5_txt">5 estrellas</label>
                                                    <input name="star5_txt" placeholder="" type="number" min="0" step="1">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row margin-top-30">
                                                <div class="col-lg-12">
                                                    <input class="blue" value="Agregar precio"  type="submit" id="submit_btn">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                    </div>
                    <!-- Fin modal agregar paquete-->
                </div>
                <!-- fin precios -->
                
                <!-- itinerarios -->
                <div class="row">
                    <?php
                        if (isset($_GET["dia"])) {
                            $dia = $_GET["dia"]+1;
                        }else {
                            $dia = 1;
                        }

                        // $consulta = "SELECT * FROM titinerario WHERE idpaquetes = '$registro[idpaquetes]' ORDER BY dia DESC LIMIT 1";
                        // $ejecutar_consulta = $conexion->query($consulta);
                        // $reg_itinerario = $ejecutar_consulta->num_rows;
                        // $list_itinerario = $ejecutar_consulta->fetch_assoc();

                        // if ($reg_itinerario > 0) {
                            
                        //     $dia = $list_itinerario["dia"]+1;

                        // }else {
                        //     $dia = 1;
                        // }

                        $consulta_iti = "SELECT * FROM titinerario WHERE idpaquetes = '$registro[idpaquetes]' ORDER BY dia";
                        $ejecutar_consulta_iti = $conexion->query($consulta_iti);
                        $num_itinerario = $ejecutar_consulta_iti->num_rows;

                        if ($num_itinerario <> $registro["duracion"]) {
                            echo '
                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#agregar-itinerario">
                                    + Agregar Itinerario
                                </button>
                            ';
                        }

                        while ($lista_itinerario = $ejecutar_consulta_iti->fetch_assoc()){
                            echo '
                                    
                                <div class="col-lg-12">
                                    <button href="" class="btn btn-link  pull-right" data-toggle="modal" data-target="#deliti'.$lista_itinerario["iditinerario"].'">eliminar</button>
                                        <a href="" class="btn btn-link pull-right" data-toggle="modal" data-target="#itinerario'.$lista_itinerario["iditinerario"].'">editar</a>
                                    <h6><b>Dia '.$lista_itinerario["dia"].': '.$lista_itinerario["titulo"].'</b></h6>
                                    <p>'.$lista_itinerario["descripcion"].'</p>
                                </div>

                                <!-- Modal editar itinerario-->
                                    <div class="modal fade" id="itinerario'.$lista_itinerario["iditinerario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h6 class="modal-title" id="myModalLabel">Editar itinerario</h6>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/modificar-itinerario.php" method="post" enctype="multipart/form-data">
                                                        <div id="contact_form">
                                                            
                                                            <div class="row">
                                                                
                                                                <div class="col-lg-2">
                                                                    <label  for="dia_txt">Dia</label>
                                                                    <input name="dia_txt" placeholder="" type="number" min="0" step="1" value="'.$lista_itinerario["dia"].'">
                                                                    <input name="iditinerario_txt" type="hidden" value="'.$lista_itinerario["iditinerario"].'">
                                                                    <input name="codigo_txt" type="hidden" value="'.$registro["codigo"].'">
                                                                    <input name="dia_get_txt" type="hidden" value="'.$_GET["dia"].'">
                                                                </div>
                                                                <div class="col-lg-10">
                                                                    <label  for="titulo_txt">Titulo</label>
                                                                    <input name="titulo_txt" placeholder="" type="text" value="'.$lista_itinerario["titulo"].'">
                                                                </div>
                                                                <div class="col-lg-12 margin-top-10">
                                                                    <label for="descripcion_iti_txta">DESCRIPCION</label>
                                                                    <textarea id="descripcion'.$lista_itinerario["iditinerario"].'" name="descripcion_iti_txta">'.$lista_itinerario["descripcion"].'</textarea>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <label>Imagen</label>
                                                                    (dimension requerida 500 X 338 pixeles)
                                                                    <input type="file" class="row" name="foto_fls">
                                                                    <input type="hidden" name="foto_hdn" value="'.$lista_itinerario["imagen"].'">
                                                                </div>
                                                                <div class="col-lg-6 col-lg-offset-3">
                                                                    <img src="../../../img/itinerarios/'.$lista_itinerario["imagen"].'" alt="">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="row margin-top-30">
                                                                <div class="col-lg-12">
                                                                    <input class="blue" value="Modificar Itinerario"  type="submit" id="submit_btn">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                         </div>
                                    </div>

                                    <script>
                                        CKEDITOR.inline(descripcion'.$lista_itinerario["iditinerario"].');
                                    </script>
                                <!-- Fin modal editar itinerario-->

                                <!-- Modal eliminar paquete-->
                                    <div class="modal fade" id="deliti'.$lista_itinerario["iditinerario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h6 class="modal-title" id="myModalLabel">Eliminar Itinerario</h6>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/eliminar-itinerario.php" method="post" enctype="multipart/form-data">
                                                        <div id="contact_form" >
                                                            <div class="row">
                                                                <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                                <h6 class="text-center">Estas seguro de eliminar itinerario?</h6>

                                                                <p class="text-center margin-top-30">Los datos del itinerario del <b class="text-danger">dia '.$lista_itinerario["dia"].'</b> se eliminaran permanentemente</p>

                                                                    <input name="iditinerario_txt" type="hidden" value="'.$lista_itinerario["iditinerario"].'">
                                                                    <input name="codigo_txt" type="hidden" value="'.$registro["codigo"].'">
                                                                    <input name="dia_txt" type="hidden" value="'.$lista_itinerario["dia"].'">
                                                                
                                                            </div>
                                                            <div class="row margin-top-30">
                                                                <div class="col-lg-12">
                                                                    <input class="blue" value="Eliminar"  type="submit" id="submit_btn">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                <!-- Fin modal eliminar paquete-->
                            ';
                        }
                    ?>
                    <!-- Modal agregar paquete-->
                    <div class="modal fade" id="agregar-itinerario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h6 class="modal-title" id="myModalLabel">Agregar itinerario</h6>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="alta-paquetes" name="alta_frm" action="../php/agregar-itinerario.php" method="post" enctype="multipart/form-data">
                                        <div id="contact_form">
                                            
                                            <div class="row">
                                                
                                                <div class="col-lg-2">
                                                    <label  for="dia_txt">Dia</label>
                                                    <input name="dia_txt" placeholder="" type="number" min="0" step="1" value="<?php echo $dia ?>">
                                                    <input name="idpaquetes_txt" type="hidden" value="<?php echo $registro["idpaquetes"] ?>">
                                                    <input name="codigo_txt" type="hidden" value="<?php echo $registro["codigo"] ?>">
                                                </div>
                                                <div class="col-lg-10">
                                                    <label  for="titulo_txt">Titulo</label>
                                                    <input name="titulo_txt" placeholder="" type="text" min="0" step="1">
                                                </div>
                                                <div class="col-lg-12 margin-top-10">
                                                    <label for="descripcion_iti_txta">DESCRIPCION</label>
                                                    <textarea name="descripcion_iti_txta"></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label>Imagen</label>
                                                    (dimension requerida 500 X 338 pixeles)
                                                    <input type="file" class="row" name="imagen_fls">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row margin-top-30">
                                                <div class="col-lg-12">
                                                    <input class="blue" value="Agregar Itinerario"  type="submit" id="submit_btn">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                         </div>
                    </div>
                    <!-- Fin modal agregar paquete-->
                </div>
                <!-- fin itienrarios -->
            </div>
            <div class="col-lg-3">
                <div class="row margin-top-30">
                    <h6>Destinos <button class="btn btn-link" type="button" data-toggle="modal" data-target="#nuevo_destino"> + Nuevo Destino</button></h6>
                    <form action="../php/add-destino.php" method="post" enctype="multipart/form-data">
                        <?php
                            $consulta = "SELECT * FROM tdestinos ORDER BY nombre";
                            $ejecutar_consulta = $conexion->query($consulta);

                            while ($listado_destinos = $ejecutar_consulta->fetch_assoc()) {
                                $consulta = "SELECT * FROM tpaquetesdestinos WHERE idpaquetes = '$registro[idpaquetes]' AND iddestinos = '$listado_destinos[iddestinos]'";
                                $ejecutar_consulta_de = $conexion->query($consulta);
                                $num_consulta_de = $ejecutar_consulta_de->num_rows;

                                if ($num_consulta_de == 1) {
                                    $checked = "checked";
                                    echo '
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="destinos[]" value="'.$listado_destinos["iddestinos"].'" '.$checked.'>
                                                '.ucwords(strtolower($listado_destinos["nombre"])).'
                                            </label>
                                        </div>
                                    ';
                                }else {
                                    echo '
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="destinos[]" value="'.$listado_destinos["iddestinos"].'">
                                                '.ucwords(strtolower($listado_destinos["nombre"])).'
                                            </label>
                                        </div>
                                    ';
                                }

                                
                            }
                            echo '
                                <input type="hidden" name="idpaquetes_txt" value="'.$registro["idpaquetes"].'">
                                <input type="hidden" name="codigo_txt" value="'.$codigo.'">
                            ';
                        ?>
                        <div class="row text-right">
                            <button type="submit" class="btn btn-warning">Asignar destino</button>
                        </div>
                    </form>

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
                                                <input type="hidden" name="codigo_txt" value="<?php echo $codigo; ?>">
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
                </div>
                <div class="row">
                    <h6>Categorias <button class="btn btn-link" type="button" data-toggle="modal" data-target="#nueva_categoria"> + Nueva Categoria</button></h6>

                    <form action="../php/add-categoria.php" method="post" enctype="multipart/form-data">
                        <?php
                            $consulta = "SELECT * FROM tcategoria ORDER BY nombre";
                            $ejecutar_consulta = $conexion->query($consulta);

                            while ($listado_categoria = $ejecutar_consulta->fetch_assoc()) {
                                $consulta = "SELECT * FROM tpaquetescategoria WHERE idpaquetes = '$registro[idpaquetes]' AND idcategoria = '$listado_categoria[idcategoria]'";
                                $ejecutar_consulta_de = $conexion->query($consulta);
                                $num_consulta_de = $ejecutar_consulta_de->num_rows;

                                if ($num_consulta_de == 1) {
                                    $checked = "checked";
                                    echo '
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="categoria[]" value="'.$listado_categoria["idcategoria"].'" '.$checked.'>
                                                '.ucwords(strtolower($listado_categoria["nombre"])).'
                                            </label>
                                        </div>
                                    ';
                                }else {
                                    echo '
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="categoria[]" value="'.$listado_categoria["idcategoria"].'">
                                                '.ucwords(strtolower($listado_categoria["nombre"])).'
                                            </label>
                                        </div>
                                    ';
                                }

                                
                            }
                            echo '
                                <input type="hidden" name="idpaquetes_txt" value="'.$registro["idpaquetes"].'">
                                <input type="hidden" name="codigo_txt" value="'.$codigo.'">
                            ';
                        ?>
                        <div class="row text-right">
                            <button type="submit" class="btn btn-warning">Asignar Categoria</button>
                        </div>
                    </form>

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
                                                <input type="hidden" name="codigo_txt" value="<?php echo $codigo; ?>">
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
                </div>
