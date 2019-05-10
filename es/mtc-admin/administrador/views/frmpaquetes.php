<?php require("../../models/sesion.php");?>
   <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $op = $_GET["op"];
    switch ($op) {
        case "alta-paquetes":
            $contenido = "../php/alta-paquetes.php";
            $titulo = "Alta de paquetes";
            break;
        case "listar-paquetes":
            $contenido = "../php/listar-paquetes.php";
            $titulo = "Paquetes actuales";
            break;
        case "alta-destinos":
            $contenido = "../php/alta-destinos.php";
            $titulo = "Mantenimiento destinos";
            break;
        case "alta-categorias":
            $contenido = "../php/alta-categorias.php";
            $titulo = "Mantenimiento Categoria";
            break;
        case "alta-usuarios":
            $contenido = "../php/alta-usuarios.php";
            $titulo = "Mantenimiento Categoria";
            break;
        case "perfil":
            $contenido = "../php/perfil.php";
            $titulo = "Mantenimiento Categoria";
            break;
        default:
            $contenido = "php/home.php";
            $titulo = "Mi panel v1";
            break;
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Iniciar Sesion</title>

    <!-- Loading Bootstrap -->
    <link href="../../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/jquery-ui.min.css" rel="stylesheet">
    <!-- main style sheet -->
    <link href="../../../css/style2.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../css/animate.css">
    
    <link href="../../../css/menu_topexpand.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="../../../css/font-awesome.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="../../../images/favicon.ico">

    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../../../js/jquery-1.11.1.min.js"></script>
    <script src="../../../js/jquery.js"></script><!-- jquery 1.11.2 -->
    <script src="../../../js/jquery-ui.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/jquery.waypoints.min.js"></script>
    <script src="../../../js/application.js"></script>
    <script src="../../../js/owl.carousel.js"></script>

    <script src="../../../js/triger.js" type="text/javascript"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php require("../../models/conexion.php"); ?>
</head>
<body>
    <header class="margin-bottom-70">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand text-info" href="#"><img src="../../../img/logo-mountain.png" width="200" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cruceros <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="frmcrucero.php?op=alta-crucero">Nuevo Crucero</a></li>
                                <li><a href="frmcrucero.php?op=listar-crucero">Lista Cruceros</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Destinos</li>
                                <li><a href="#">Nuevo destino</a></li>
                                <li><a href="#">Asignar destino a cruceros</a></li>
                                <li><a href="#">Lista destinos</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paquetes <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="frmpaquetes.php?op=alta-paquetes">Nuevo Paquete</a></li>
                                <li><a href="frmpaquetes.php?op=listar-paquetes">Paquetes Actuales</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Destinos</li>
                                <li><a href="frmpaquetes.php?op=alta-destinos">Mantenimiento destinos</a></li>
                                <li class="dropdown-header">Categorias</li>
                                <li><a href="frmpaquetes.php?op=alta-categorias">Mantenimiento categorias</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php require("../../models/usuario.php");?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="frmpaquetes.php?op=perfil">Ver Perfil</a></li>
                                <li><a href="frmpaquetes.php?op=alta-usuarios">Alta usuarios</a></li>
                                <li><a href="../../models/salir.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <div class="margin-top-30">
        <div class="container-fluid">
            <div class="row header-form-2 bg-color-white">
                <div class="col-lg-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="../../../img/usuario.png" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php require("../../models/usuario.php");?>
                            </div>
                            <div class="profile-usertitle-job">
                                <?php echo $tipousuario; ?>
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <a href="frmpaquetes.php?op=perfil" class="btn btn-success btn-sm">Perfil</a>
                            <a href="../../models/salir.php" class="btn btn-danger btn-sm">Salir</a>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li>
                                    <a href="index.php">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Inicio </a>
                                </li>
                                <li>
                                    <a href="frmpaquetes.php?op=alta-paquetes">
                                    <i class="fa fa-plus"></i>
                                    Nuevo Paquete </a>
                                </li>
                                <li>
                                    <a href="frmpaquetes.php?op=listar-paquetes">
                                    <i class="fa fa-bars"></i>
                                    Paquetes Actuales </a>
                                </li>
                                <li>
                                    <a href="frmpaquetes.php?op=alta-destinos">
                                    <i class="fa fa-map-marker"></i>
                                    Destinos </a>
                                </li>
                                <li>
                                    <a href="frmpaquetes.php?op=alta-categorias">
                                    <i class="fa fa-check"></i>
                                    Categorias </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
                <?php include($contenido); ?>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.inline( 'descripcion_txta' );
        CKEDITOR.inline( 'incluye_txta' );
        CKEDITOR.inline( 'noincluye_txta' );
        CKEDITOR.inline( 'opcional_txta' );
        CKEDITOR.inline( 'descripcion_edit_txta' );
        CKEDITOR.inline( 'incluye_edit_txta' );
        CKEDITOR.inline( 'noincluye_edit_txta' );
        CKEDITOR.inline( 'opcional_edit_txta' );
        CKEDITOR.inline( 'descripcion_iti_txta' );
        CKEDITOR.inline( 'descripcion_destino_txta' );
        
    </script>
    <?php include("footer.php"); ?>
