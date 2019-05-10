  
            <div class="col-lg-6">
                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h5>Perfil de usuario</h5>
                        <div class="sec-title-div-1"></div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#nuevo_destino">editar</button>
                    <table class="table table-condensed">
                        <tbody>
                            <?php
                                $consulta = "SELECT * FROM tusuario WHERE idusuario = '$idusuario'";
                                $ejecutar_consulta = $conexion->query($consulta);
                                $registro = $ejecutar_consulta->fetch_assoc();

                                echo '
                                <tr>
                                    <td><b>Nombres</b></td>
                                    <td>'.$registro["nombre"].' '.$registro["apellidos"].'</td>
                                </tr>
                                <tr>
                                    <td><b>DNI</b></td>
                                    <td>'.$registro["dni"].'</td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>'.$registro["email"].'</td>
                                </tr>
                                <tr>
                                    <td><b>Direcci&oacute;n</b></td>
                                    <td>'.$registro["direccion"].'</td>
                                </tr>
                                <tr>
                                    <td><b>Telefono</b></td>
                                    <td>'.$registro["telefono"].'</td>
                                </tr>
                                <tr>
                                    <td><b>Usuario</b></td>
                                    <td>'.$registro["usuario"].'</td>
                                </tr>
                                <tr>
                                    <td><b>Contase&ntilde;a</b></td>
                                    <td>'.$registro["contrasenia"].'</td>
                                </tr>
                                <tr><td></td><td></td></tr>
                                ';
                            ?>
                        </tbody>
                    </table>

                    <!-- Modal agergar destino-->
                        <div class="modal fade" id="nuevo_destino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h6 class="modal-title" id="myModalLabel">Modificar Cuenta</h6>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../php/modificar-usuarios.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-5 padding-left-0">
                                                    <label for="">Nombres</label>
                                                    <input name="nombre_txt" type="text" placeholder="NOMBRES" required value="<?php echo $registro["nombre"] ?>">
                                                    <input name="idusuario_txt" type="hidden" placeholder="NOMBRES" required value="<?php echo $registro["idusuario"] ?>">
                                                </div>
                                                <div class="col-lg-7 padding-right-0">
                                                    <label for="">Apellidos</label>
                                                    <input name="apellidos_txt" type="text" placeholder="APELLIDOS" required value="<?php echo $registro["apellidos"] ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 padding-left-0">
                                                    <label for="">DNI</label>
                                                    <input name="dni_txt" type="text" placeholder="DNI" required value="<?php echo $registro["dni"] ?>">
                                                </div>
                                                <div class="col-lg-8 padding-right-0">
                                                    <label for="">Email</label>
                                                    <input name="email_txt" type="email" placeholder="EMAIL" required value="<?php echo $registro["email"] ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-9 padding-left-0">
                                                    <label for="">Direccion</label>
                                                    <input name="direccion_txt" type="text" placeholder="DIRECCION" value="<?php echo $registro["direccion"] ?>">
                                                </div>
                                                <div class="col-lg-3 padding-right-0">
                                                    <label for="">Telefono</label>
                                                    <input name="telefono_txt" type="text" placeholder="TELEFONO" value="<?php echo $registro["telefono"] ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 padding-left-0">
                                                    <label>Usuario</label>
                                                    <input name="usuario_txt" type="text" placeholder="USUARIO" required value="<?php echo $registro["usuario"] ?>">
                                                </div>
                                                <div class="col-lg-6 padding-right-0">
                                                    <label>Contraseña</label>
                                                    <input name="contrasena_txt" type="text" placeholder="CONTRASEÑA" required value="<?php echo $registro["contrasenia"] ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 padding-left-0">
                                                    <label for="">Tipo de usuario</label>
                                                    <select name="tipousuario_slc">
                                                        <?php
                                                            switch ($registro["tipousuario"]) {
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
                                                        ?>
                                                        
                                                    </select>
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
                </div>
            </div>
            <div class="col-lg-3"></div>