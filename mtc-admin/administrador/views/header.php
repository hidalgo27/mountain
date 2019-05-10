<?php require("../../models/sesion.php");?>
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

    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
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