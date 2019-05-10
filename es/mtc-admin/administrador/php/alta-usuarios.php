  
            <div class="col-lg-6">
                <div class="row">
                    <div class="row">
                        <div class="section-title-1 tx-center margin-bottom-30">
                            <h5>Usuarios Actuales</h5>
                            <div class="sec-title-div-1"></div>
                        </div>
                    </div>
                    
                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#agregar_usuarios">+ Nuevo Usuario</button>
                        <!-- Modal Eliminar -->
                            <div class="modal fade" id="agregar_usuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h6 class="modal-title" id="myModalLabel">Agregar Usuario</h6>
                                        </div>
                                        <div class="modal-body">
                                            <form action="../php/agregar-usuarios.php" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-5 padding-left-0">
                                                        <input name="nombre_txt" type="text" placeholder="NOMBRES" required>
                                                    </div>
                                                    <div class="col-lg-7 padding-right-0">
                                                        <input name="apellidos_txt" type="text" placeholder="APELLIDOS" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 padding-left-0">
                                                        <input name="dni_txt" type="text" placeholder="DNI" required>
                                                    </div>
                                                    <div class="col-lg-8 padding-right-0">
                                                        <input name="email_txt" type="email" placeholder="EMAIL" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9 padding-left-0">
                                                        <input name="direccion_txt" type="text" placeholder="DIRECCION">
                                                    </div>
                                                    <div class="col-lg-3 padding-right-0">
                                                        <input name="telefono_txt" type="text" placeholder="TELEFONO">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 padding-left-0">
                                                        <input name="usuario_txt" type="text" placeholder="USUARIO" required>
                                                    </div>
                                                    <div class="col-lg-6 padding-right-0">
                                                        <input name="contrasena_txt" type="text" placeholder="CONTRASEÑA" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 padding-left-0">
                                                        <select name="tipousuario_slc" id="">
                                                            <option value="administrador">ADMINISTRADOR</option>
                                                            <option value="editor">EDITOR</option>
                                                        </select>
                                                    </div>
                                                </div>    
                                                <div class="row margin-top-50">
                                                    <input class="blue" value="Agregar Usuario"  type="submit" id="submit_btn">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end modal Eliminar -->
                    
                    <table class="table table-striped table-bordered table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nombres</th>
                                <th>Email</th>
                                <th>Tipo Usuario</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                $consulta = "SELECT * FROM tusuario ORDER BY nombre desc";
                                $ejecutar_consulta = $conexion->query($consulta);

                                $i=1;
                                while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <td>'.str_pad($i,3,'0',STR_PAD_LEFT).'</td>
                                        <td>'.$listado["nombre"].' '.$listado["apellidos"].'</td>
                                        <td>'.$listado["email"].'</td>
                                        <td>'.$listado["tipousuario"].'</td>
                                        
                                        
                                        <td>
                                            <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit'.$listado["idusuario"].'"><i class="fa fa-pencil-square-o"></i></button>

                                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete'.$listado["idusuario"].'"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>

                                    <!-- Modal Eliminar -->
                                    <div class="modal" id="delete'.$listado["idusuario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h6 class="modal-title" id="myModalLabel">Eliminar Usuario</h6>
                                                </div>
                                                <div class="modal-body">
                                                <form role="form" id="alta-crucero" name="alta_frm" action="../php/eliminar-usuario.php" method="post" enctype="multipart/form-data">
                                                    <div id="contact_form" >
                                                        <div class="row">
                                                            <i class="fa fa-exclamation-triangle fa-3x fa-pull-left fa-border text-danger margin-top-5"></i>

                                                            <h6 class="text-center">Estas seguro de eliminar usuario?</h6>
                                                            <p class="text-center margin-top-30">Los datos del usuario <b>'.$listado["nombre"].'</b> se eliminaran permanentemente</p>


                                                            <input value="'.$listado["idusuario"].'" name="idusuario_txt" type="hidden">
                                                            
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
                                    
                                    <!-- Modal agergar destino-->
                                        <div class="modal fade" id="edit'.$listado["idusuario"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h6 class="modal-title" id="myModalLabel">Modificar Usuario</h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="../php/modificar-usuarios.php" method="post" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-lg-5 padding-left-0">
                                                                    <label for="">Nombres</label>
                                                                    <input name="nombre_txt" type="text" placeholder="NOMBRES" required value="'.$listado["nombre"].'">

                                                                    <input name="idusuario_txt" type="hidden" required value="'.$listado["idusuario"].'">
                                                                    <input name="op_txt" type="hidden" required value="'.$_GET["op"].'">

                                                                </div>
                                                                <div class="col-lg-7 padding-right-0">
                                                                    <label for="">Apellidos</label>
                                                                    <input name="apellidos_txt" type="text" placeholder="APELLIDOS" required value="'.$listado["apellidos"].'">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 padding-left-0">
                                                                    <label for="">DNI</label>
                                                                    <input name="dni_txt" type="text" placeholder="DNI" required value="'.$listado["dni"].'">
                                                                </div>
                                                                <div class="col-lg-8 padding-right-0">
                                                                    <label for="">Email</label>
                                                                    <input name="email_txt" type="email" placeholder="EMAIL" required value="'.$listado["email"].'">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-9 padding-left-0">
                                                                    <label for="">Direccion</label>
                                                                    <input name="direccion_txt" type="text" placeholder="DIRECCION" value="'.$listado["direccion"].'">
                                                                </div>
                                                                <div class="col-lg-3 padding-right-0">
                                                                    <label for="">Telefono</label>
                                                                    <input name="telefono_txt" type="text" placeholder="TELEFONO" value="'.$listado["telefono"].'">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 padding-left-0">
                                                                    <label>Usuario</label>
                                                                    <input name="usuario_txt" type="text" placeholder="USUARIO" required value="'.$listado["usuario"].'">
                                                                </div>
                                                                <div class="col-lg-6 padding-right-0">
                                                                    <label>Contraseña</label>
                                                                    <input name="contrasena_txt" type="text" placeholder="CONTRASEÑA" required value="'.$listado["contrasenia"].'">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 padding-left-0">
                                                                    <label for="">Tipo de usuario</label>
                                                                    <select name="tipousuario_slc">';
                                                                        
                                                                            switch ($listado["tipousuario"]) {
                                                                                case 'administrador':
                                                                                    echo '
                                                                                        <option value="administrador" selected>ADMINISTRADOR</option>
                                                                                        <option value="editor">EDITOR</option>
                                                                                    ';
                                                                                    break;
                                                                                case 'editor':
                                                                                    echo '
                                                                                        <option value="administrador">ADMINISTRADOR</option>
                                                                                        <option value="editor" selected>EDITOR</option>
                                                                                    ';
                                                                                    break;
                                                                                
                                                                                default:
                                                                                    // code...
                                                                                    break;
                                                                            }
                                                                        
                                                                        
                                                                    echo '</select>
                                                                </div>
                                                            </div>    
                                                            <div class="row margin-top-50">
                                                                <input class="blue" value="modificar Usuario"  type="submit" id="submit_btn">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- fin Modal agergar destino-->

                                    ';
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3"></div>