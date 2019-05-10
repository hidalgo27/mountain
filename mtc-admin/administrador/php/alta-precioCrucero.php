<?php
    $estadoTexto = array("1" => "SI", "0" => "NO");
    $codigo = $_GET["codigo"];
    $consulta = "SELECT * FROM tcrucero WHERE codigo = '$codigo'";
    $ejecutar_consulta = $conexion->query($consulta);
    $registro = $ejecutar_consulta->fetch_assoc();
?>
    <div class="header-form-2">
        <div class="row">
            <div class="col-lg-3">
                <h6>Imagenes</h6>
                <div class="row">
                    <div class="item testimonial-2" id="testimonial-2">
                        <div id="owl-testimonial-1">
                            <?php
                                $consulta = "SELECT * FROM timagencrucero WHERE idcrucero = '$registro[idcrucero]'";
                                $ejecutar_consulta_imagen = $conexion->query($consulta);
                                while ($registro_imagenes = $ejecutar_consulta_imagen->fetch_assoc()) {
                                    echo '
                                        <div class="item">
                                            <img src="../../../img/crucero/'.$registro_imagenes["imagen"].'" alt="'.$registro_imagenes["nombre"].'">
                                            <a href="../php/eliminar-imagen.php?codigo='.$codigo.'&id='.$registro_imagenes["idimagenCrucero"].'" class="btn btn-link pull-right">Eliminar</a>
                                        </div>
                                    ';

                                }
                            ?>
                        </div>
                    </div>
                </div><!-- /.item -->
                <div class="row">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#nuevo_imagen" aria-expanded="false" aria-controls="collapseExample">
                        + Nueva imagen
                    </button>
                </div>
                <div class="collapse" id="nuevo_imagen">
                    <div class="col-lg-12">
                        <form action="../php/agregar-imagen.php" method="post" enctype="multipart/form-data">
                            <div class="row margin-top-10">
                                <input class="" id="nombre_txt" name="nombre_txt" type="text" placeholder="NOMBRE IMAGEN">

                                <input class="" id="codigo_txt" name="codigo_txt" type="hidden" value="<?php echo $registro["codigo"]; ?>">
                                <input class="" id="idcrucero_txt" name="idcrucero_txt" type="hidden" value="<?php echo $registro["idcrucero"]; ?>">

                            </div>
                            <div class="row">
                                <input type="file" class="row" name="imagen_fls">
                            </div>
                            <div class="row text-right">
                                <button type="submit" class="btn btn-info">Agregar Imagen</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <div class="section-title-1 tx-center">
                        <h5><?php echo $registro["codigo"]." : ".$registro["titulo"]; ?></h5>
                        <div class="sec-title-div-1"></div>
                        <p><?php echo $registro["descripcion"]; ?></p>
                        <p class="text-info">Capacidad: <?php echo $registro["capacidad"]." personas | Estrellas: ".$registro["estrellas"]." | Pagina de Inicio: ".$estadoTexto[$registro["estado"]]; ?></p>
                    </div>
                </div>
                <button class="btn-link padding-left-0" data-toggle="modal" data-target="#alta-precioCrucero">
                    <b>Agregar Precio</b>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-plus-square-o fa-stack-1x"></i>
                    </span>
                </button>
                <div class="modal fade" id="alta-precioCrucero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h6 class="modal-title" id="myModalLabel">Agregar Precio</h6>
                            </div>
                            <div class="modal-body">
                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/agregar-precioCrucero.php" method="post" enctype="multipart/form-data">
                                <div id="contact_form" >
                                    <div class="row">
                                        <form role="form" id="alta-crucero" name="alta_frm" action="../php/agregar-precioCrucero.php" method="post" enctype="multipart/form-data">
                                            <div id="contact_form" >
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for="duracion_txt">DURACION</label>
                                                        <input class="" id="duracion_txt" name="duracion_txt" type="number" min="0" step="1">
                                                    </div>
                                                    <div class="col-lg-4 hide">
                                                        <input id="idcrucero_txt" value="<?php echo $registro["idcrucero"]; ?>" name="idcrucero_txt" type="hidden">
                                                        <input id="codigo_txt" value="<?php echo $registro["codigo"]; ?>" name="codigo_txt" type="hidden">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="acomodacion_slc">ACOMODACION</label>
                                                        <select name="acomodacion_slc" id="acomodacion_slc">
                                                            <option value="">-- SELECCIONE --</option>
                                                            <option value="simple">Simple</option>
                                                            <option value="doble">Doble</option>
                                                            <option value="triple">Triple</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="categoria_txt">CATEGORIA</label>
                                                        <input class="" id="categoria_txt" name="categoria_txt" type="text">
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
                                                        <label for="noIncluye_txta">NO INCLUYE</label>
                                                        <textarea name="noIncluye_txta" id="noIncluye_txta"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label for="precio_txt">PRECIO</label>
                                                        <input class="" id="precio_txt" name="precio_txt" type="number" min="0" step="1">
                                                    </div>
                                                </div>
                                                <div class="row margin-top-30">
                                                    <div class="col-lg-6">
                                                        <input class="blue" value="Agregar Precio"  type="submit" id="submit_btn">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Duraci&oacute;n</th>
                            <th>Acomodaci&oacute;n</th>
                            <th>Categoria</th>
                            <th>Precio ($)</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $consulta = "SELECT * FROM tpreciocrucero WHERE idcrucero = '$registro[idcrucero]' ORDER BY duracion";
                            $ejecutar_consulta = $conexion->query($consulta);
                            $i=1;
                            while ($lista = $ejecutar_consulta->fetch_assoc()) {
                                echo '
                                <tr>
                                    <td>'.str_pad($i,3,'0',STR_PAD_LEFT).'</td>
                                    <td>'.$lista["duracion"].'</td>
                                    <td>'.$lista["acomodacion"].'</td>
                                    <td>'.$lista["categoria"].'</td>
                                    <td class="text-right">'.$lista["precio"].'</td>
                                    <td class="text-center">
                                        <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit'.$lista["idprecioCrucero"].'"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete'.$lista["idprecioCrucero"].'"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                    <td class="text-center"><a href="frmCrucero.php?op=alta-precioCrucero&codigo='.$codigo.'&duracion='.$lista["duracion"].'">Itinerario</a></td>
                                </tr>

                                <!-- Modal Editar -->
                                <div class="modal fade" id="edit'.$lista["idprecioCrucero"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Modificar Precio</h6>
                                            </div>
                                            <div class="modal-body">
                                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/modificar-precioCrucero.php" method="post" enctype="multipart/form-data">
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="duracion_txt">DURACION</label>
                                                            <input class="" id="duracion_txt" name="duracion_txt" type="number" min="0" step="1" value="'.$lista["duracion"].'">
                                                        </div>
                                                        <div class="col-lg-4 hide">
                                                            <input id="idprecioCrucero_txt" value="'.$lista["idprecioCrucero"].'" name="idprecioCrucero_txt" type="hidden">
                                                            <input id="codigo_txt" value="'.$codigo.'" name="codigo_txt" type="hidden">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="acomodacion_slc">ACOMODACION</label>
                                                            <select name="acomodacion_slc" id="acomodacion_slc">
                                                                <option value="">-- SELECCIONE --</option>';
                                                                switch ($lista["acomodacion"]) {
                                                                    case 'simple':
                                                                        echo '
                                                                        <option value="simple" selected>Simple</option>
                                                                        <option value="doble">Doble</option>
                                                                        <option value="triple">Triple</option>
                                                                        ';
                                                                        break;
                                                                    case 'doble':
                                                                        echo '
                                                                        <option value="simple">Simple</option>
                                                                        <option value="doble" selected>Doble</option>
                                                                        <option value="triple">Triple</option>
                                                                        ';
                                                                        break;
                                                                    case 'triple':
                                                                        echo '
                                                                        <option value="simple">Simple</option>
                                                                        <option value="doble">Doble</option>
                                                                        <option value="triple" selected>Triple</option>
                                                                        ';
                                                                        break;
                                                                    
                                                                    default:
                                                                        echo 'no es una opcion valida';
                                                                        break;
                                                                }
                                                            echo '</select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="categoria_txt">CATEGORIA</label>
                                                            <input class="" id="categoria_txt" name="categoria_txt" type="text" value="'.$lista["categoria"].'">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label for="incluye_edit_txta">INCLUYE</label>
                                                            <textarea name="incluye_edit_txta" id="incluye_edit_txta">'.$lista["incluye"].'</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label for="noIncluye_edit_txta">NO INCLUYE</label>
                                                            <textarea name="noIncluye_edit_txta" id="noIncluye_edit_txta">'.$lista["noIncluye"].'</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="precio_txt">PRECIO</label>
                                                            <input class="" id="precio_txt" name="precio_txt" type="number" min="0" step="1" value="'.$lista["precio"].'">
                                                        </div>
                                                    </div>
                                                    <div class="row margin-top-30">
                                                        <div class="col-lg-6">
                                                            <input class="blue" value="Modificar"  type="submit" id="submit_btn">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal Editar -->

                                <!-- Modal Eliminar -->
                                <div class="modal" id="delete'.$lista["idprecioCrucero"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Eliminar Precio</h6>
                                            </div>
                                            <div class="modal-body">
                                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/eliminar-precioCrucero.php" method="post" enctype="multipart/form-data">
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                        <h6 class="text-center">Estas seguro de eliminar precio?</h6>
                                                        <p class="text-center margin-top-30">Los datos se eliminaran permanentemente</p>


                                                        <input id="idprecioCrucero_txt" value="'.$lista["idprecioCrucero"].'" name="idprecioCrucero_txt" type="hidden">
                                                        <input id="codigo_txt" value="'.$codigo.'" name="codigo_txt" type="hidden">
                                                        
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
                                ';
                                $i++;
                            }
                        ?>
                        
                    </tbody>
                </table>

                <?php
                    if (isset($_GET["duracion"])) {

                        $duracion = $_GET["duracion"];

                        $consulta = "SELECT * FROM tpreciocrucero WHERE idcrucero = '$registro[idcrucero]' AND duracion = '$duracion'";
                        $ejecutar_consulta = $conexion->query($consulta);
                        $registro_idprecio = $ejecutar_consulta->fetch_assoc();

                        $consulta = "SELECT * FROM titinerario WHERE idprecioCrucero = '$registro_idprecio[idprecioCrucero]' ORDER BY dia";
                        $ejecutar_consulta_itinerario = $conexion->query($consulta);
                        $num_itinerario = $ejecutar_consulta_itinerario->num_rows;

                        echo '
                        <div class="row os-animation margin-top-30" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <div class="section-title-1 tx-center">
                                <h6>Itinerario de duracion '.$duracion.' dias</h6>
                                <div class="sec-title-div-1"></div>
                            </div>
                        </div>
                        ';

                        if ($num_itinerario < $duracion) {
                            $dia = $_GET["dia"];
                            $consulta = "SELECT * FROM titinerario WHERE idprecioCrucero = '$registro_idprecio[idprecioCrucero]' AND dia = '$dia'";
                            $ejecutar_consulta_fecha = $conexion->query($consulta);
                            $registro_fecha = $ejecutar_consulta_fecha->fetch_assoc();

                            if ($registro_fecha) {
                                $dia = $registro_fecha["dia"]+1;
                                $fecha = date($registro_fecha["fecha"]);
                                $nuevafecha = strtotime( '+1 day', strtotime($fecha));
                                $nuevafecha = date ('Y-m-j', $nuevafecha);
                            }else {
                                $consulta = "SELECT * FROM titinerario WHERE idprecioCrucero = '$registro_idprecio[idprecioCrucero]' ORDER BY dia DESC LIMIT 0,1";
                                $ejecutar_consulta_fecha = $conexion->query($consulta);
                                $registro_fecha = $ejecutar_consulta_fecha->fetch_assoc();

                                $dia = $registro_fecha["dia"]+1;

                                $fecha = date($registro_fecha["fecha"]);
                                $nuevafecha = strtotime( '+1 day', strtotime($fecha));
                                $nuevafecha = date ('Y-m-j', $nuevafecha);
                            }
                            echo '
                            <div class="row">
                                <button class="btn-link padding-left-0" data-toggle="modal" data-target="#alta-itinerario">
                                    <b>Agregar Itinerario</b>
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-plus-square-o fa-stack-1x"></i>
                                    </span>
                                </button>
                                <div class="modal fade" id="alta-itinerario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Agregar Itinerario</h6>
                                            </div>
                                            <div class="modal-body">
                                            
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <form role="form" id="alta-crucero" name="alta_frm" action="../php/agregar-itinerario.php" method="post" enctype="multipart/form-data">
                                                            <div id="contact_form" >
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <label for="dia_txt">DIA</label>
                                                                        <input class="" id="dia_txt" name="dia_txt" type="number" min="0" step="1" value="'.$dia.'" required>
                                                                    </div>
                                                                    <div class="col-lg-4 hide">
                                                                        <input id="idprecioCrucero_txt" value="'.$registro_idprecio["idprecioCrucero"].'" name="idprecioCrucero_txt" type="hidden">
                                                                        <input id="codigo_txt" value="'.$codigo.'" name="codigo_txt" type="hidden">
                                                                        <input id="duracion_txt" value="'.$duracion.'" name="duracion_txt" type="hidden">
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <label for="fecha_txt">FECHA</label>
                                                                        <input class="" id="fecha_txt" name="fecha_txt" type="text" value='.$nuevafecha.'>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <label for="titulo_txt">TITULO</label>
                                                                        <input class="" id="titulo_txt" name="titulo_txt" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <label for="descripcion_txta">DESCRIPCION</label>
                                                                        <textarea name="descripcion_txta" id="descripcion_txta"></textarea>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <div class="row margin-top-30">
                                                                    <div class="col-lg-6">
                                                                        <input class="blue" value="Agregar Itinerario"  type="submit" id="submit_btn">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>  
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }

                        while ($registro_itinerario = $ejecutar_consulta_itinerario->fetch_assoc()) {
                            $consulta = "SELECT * FROM tdestinos ORDER BY nombre";
                            $ejecutar_consulta_destino = $conexion->query($consulta);
                        echo '
                        
                            <div class="row">
                                <h6 class="margin-top-0">
                                    Dia '.$registro_itinerario["dia"].' : '.$registro_itinerario["titulo"].' 
                                    <span class="text-success">('.$registro_itinerario["fecha"].')</span>
                                    
                                    <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#itinerarioDelete'.$registro_itinerario["iditinerario"].'"><i class="fa fa-trash-o" title="Eliminar"></i></button>

                                    <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#itinerarioEdit'.$registro_itinerario["iditinerario"].'"><i class="fa fa-pencil-square-o" title="Editar"></i></button>

                                </h6>
                                
                                <p>'.$registro_itinerario["descripcion"].'</p>

                                <b>Destinos: </b>

                                <form action="../php/add-destino.php" method="post" enctype="multipart/form-data">';
                                    while ($lista_destinos = $ejecutar_consulta_destino->fetch_assoc()) {

                                        $consulta = "SELECT * FROM tcrucerodestino WHERE iditinerario = '$registro_itinerario[iditinerario]' AND iddestinos = '$lista_destinos[iddestinos]'";
                                        $ejecutar_consulta_dc = $conexion->query($consulta);
                                        $num_consulta_dc = $ejecutar_consulta_dc->num_rows;

                                        if ($num_consulta_dc == 1) {
                                            $checked = "checked";
                                            echo '
                                                            
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="destinos[]" value="'.$lista_destinos["iddestinos"].'" '.$checked.'>
                                                                    '.$lista_destinos["nombre"].'
                                                </label>
                                                            
                                            ';
                                        }else {
                                            echo '
                                                            
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="destinos[]" value="'.$lista_destinos["iddestinos"].'">
                                                                    '.$lista_destinos["nombre"].'
                                                </label>
                                                            
                                            ';
                                        }
                                                        
                                    }

                                echo '
                                    <input type="hidden" name="iditinerario_txt" value="'.$registro_itinerario["iditinerario"].'">
                                    <input type="hidden" name="codigo_txt" value="'.$codigo.'">
                                    <input type="hidden" name="duracion_txt" value="'.$duracion.'">
                                    <input type="hidden" name="dia_txt" value="'.$_GET["dia"].'">
                                    <div class="row">
                                        <button type="submit" class="btn btn-info btn-xs">Asignar destino</button>
                                    </div>
                                </form>
                                
                            </div>
                            <!-- Moadal Editar -->
                            <div class="modal fade" id="itinerarioEdit'.$registro_itinerario["iditinerario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h6 class="modal-title" id="myModalLabel">Editar itinerario para el dia '.$registro_itinerario["dia"].'</h6>
                                        </div>
                                        <div class="modal-body">
                                        
                                            <div id="contact_form" >
                                                <div class="row">
                                                    <form role="form" id="alta-crucero" name="alta_frm" action="../php/modificar-itinerario.php" method="post" enctype="multipart/form-data">
                                                        <div id="contact_form" >
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label for="dia_txt">DIA</label>
                                                                    <input class="" id="dia_txt" name="dia_txt" type="number" min="0" step="1" value="'.$registro_itinerario["dia"].'">
                                                                </div>
                                                                <div class="col-lg-4 hide">
                                                                    <input id="iditinerario_txt" value="'.$registro_itinerario["iditinerario"].'" name="iditinerario_txt" type="hidden">
                                                                    <input id="codigo_txt" value="'.$codigo.'" name="codigo_txt" type="hidden">
                                                                    <input id="duracion_txt" value="'.$duracion.'" name="duracion_txt" type="hidden">
                                                                    <input id="dia_home_txt" value="'.$_GET["dia"].'" name="dia_home_txt" type="hidden">
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label for="fecha_txt">FECHA</label>
                                                                    <input class="" id="fecha_txt" name="fecha_txt" type="text" value="'.$registro_itinerario["fecha"].'">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label for="titulo_txt">TITULO</label>
                                                                    <input class="" id="titulo_txt" name="titulo_txt" type="text" value="'.$registro_itinerario["titulo"].'">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label for="descripcion_txta">DESCRIPCION</label>
                                                                    <textarea name="descripcion_txta" id="descripcion_txta">'.$registro_itinerario["descripcion"].'</textarea>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row margin-top-30">
                                                                <div class="col-lg-6">
                                                                    <input class="blue" value="Modificar Itinerario"  type="submit" id="submit_btn">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>  
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal Editar -->

                            <!-- Modal Eliminar -->
                                <div class="modal" id="itinerarioDelete'.$registro_itinerario["iditinerario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Eliminar Itinerario</h6>
                                            </div>
                                            <div class="modal-body">
                                            <form role="form" id="alta-crucero" name="alta_frm" action="../php/eliminar-itinerario.php" method="post" enctype="multipart/form-data">
                                                <div id="contact_form" >
                                                    <div class="row">
                                                        <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                        <h6 class="text-center">Estas seguro de eliminar?</h6>
                                                        <p class="text-center margin-top-30">Los datos para el ititinerario del <b>dia '.$registro_itinerario["dia"].'</b> se eliminaran permanentemente</p>


                                                        <input id="iditinerario_txt" value="'.$registro_itinerario["iditinerario"].'" name="iditinerario_txt" type="hidden">
                                                        <input id="codigo_txt" value="'.$codigo.'" name="codigo_txt" type="hidden">
                                                        <input id="duracion_txt" value="'.$duracion.'" name="duracion_txt" type="hidden">
                                                       <input id="dia_txt" value="'.$registro_itinerario["dia"].'" name="dia_txt" type="hidden">
                                                        
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

                            <!-- Modal Destinos -->
                                <div class="modal fade" id="destino'.$registro_itinerario["iditinerario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h6 class="modal-title" id="myModalLabel">Agregar destinos</h6>
                                            </div>
                                            <div class="modal-body clearfix">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- end modal Destinos -->
                        ';
                        }
                    }
                ?>
                
            </div>
            <div class="col-lg-3">
                <h6>Destinos Actuales</h6>
                    <ul class="row">
                        <?php
                            $consulta = "SELECT * FROM tdestinos ORDER BY nombre";
                            $ejecutar_lista_destino = $conexion->query($consulta);
                            while ($listado_destinos = $ejecutar_lista_destino->fetch_assoc()) {
                                echo '
                                    <li><i class="fa fa-check text-info"></i> '.$listado_destinos["nombre"].'</li>
                                ';
                            }
                        ?>
                    </ul>
                <div class="row">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#nuevo_destino" aria-expanded="false" aria-controls="collapseExample">
                        + Nuevo Destino
                    </button>
                </div>
                <div class="collapse" id="nuevo_destino">
                    <div class="col-lg-12">
                        <form action="../php/agregar-destino.php" method="post" enctype="multipart/form-data">
                            <div class="row margin-top-10">
                                <input class="" id="nombre_txt" name="nombre_txt" type="text" placeholder="NOMBRE DESTINO" required>
                                <input type="hidden" name="codigo_txt" value="<?php echo $codigo; ?>">
                            </div>
                            <div class="row">
                                <textarea name="descripcion_destino_txta" id="descripcion_destino_txta" placeholder="DESCRIPCION"></textarea>
                            </div>
                            <div class="row margin-top-10">
                                <input class="" id="imagen_txt" name="imagen_txt" type="text" placeholder="NOMBRE IMAGEN">
                            </div>
                            <div class="row">
                                <input type="file" class="row" name="imagen_fls">
                            </div>
                            <div class="row text-right">
                                <button type="submit" class="btn btn-info">Agregar destino</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.inline( 'incluye_txta' );
        CKEDITOR.inline( 'noIncluye_txta' );
        CKEDITOR.inline( 'descripcion_txta' );

        CKEDITOR.inline( 'incluye_edit_txta' );
        CKEDITOR.inline( 'noIncluye_edit_txta' );
        CKEDITOR.inline( 'descripcion_edit_txta' );
    </script>