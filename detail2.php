<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Montain C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="author" type="text/plain" href="../../humans.txt">
    <link href="../../img/slider/machupicchu.jpg" rel="image_src"/>

    <!-- Loading Bootstrap -->
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- main style sheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/menu_topexpand.css">
    <link rel="stylesheet" type="text/css" href="../../css/animate.css">
    <!-- Font Awesome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="../../ico/favicon.ico">
    <link href="../../ico/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="../../ico/apple-touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../../ico/apple-touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../ico/apple-touch-icon-ipad.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../ico/apple-touch-icon-iphone-retina-display.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../ico/apple-touch-icon-ipad-retina-display.png"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php include ("mtc-admin/models/conexion.php"); ?>
</head>

    <?php include("include/header.php");

        $titulo = str_replace('-',' ',$_GET["titulo"]);
        $duracion = $_GET["duracion"];

        $consulta = "SELECT * FROM tpaquetes WHERE titulo='$titulo' AND duracion = '$duracion'";
        $ejecutar_consulta = $conexion->query($consulta);
        $registro = $ejecutar_consulta->fetch_assoc();
    ?>

        <!-- slider -->
        <div class="post-template">
    		<div class="slider">
                <div class="container">
                    <ul class="slides row">
                        <li style="" class="slider-background-1">
                            <div class="overlay"></div><!-- Overlay for slide -->
                        </li>
                        <li style="" class="slider-background-2">
                            <div class="overlay"></div><!-- Overlay for slide -->
                            <!-- <h3>Discover our area by bike. Choose your adventure!2</h3> -->
                        </li>
                        <li style="" class="slider-background-3">
                            <div class="overlay"></div><!-- Overlay for slide -->
                            <!-- <h3>Discover our area by boat. Choose your adventure3!</h3> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    	<!-- end slider -->

        <!--  -->
    		<div class="item  margin-top-50 " id="feature-8">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="section-title-1 tx-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                <?php
                                    echo '
                                        <h1>'.$registro["titulo"].'</h1>
                                        <!-- <div class="sec-title-div-3"></div> -->
                                        <h6 class="color-blue">'.$registro["duracion"].' DAYS / FROM Inquire</h6>
                                    ';
                                ?>
                                
                            </div>
                        </div>
                        <div class="row text-center">
                            <div id="cd-intro-tagline">
                                <a href="#content-area-3" class="cd-btn">INQUIRE NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        <!-- /.item -->
        
        <!-- menu secundario -->
        <div class="margin-top-0">
            <div class="cd-secondary-nav">
                <a href="#0" class="cd-secondary-nav-trigger">Menu<span></span></a> <!-- button visible on small devices -->
                <nav>
                    <ul>
                        <li>
                            <a href="#overview">
                                <b>OVERVIEW</b>
                                <span></span><!-- icon -->
                            </a>
                        </li>
                        
                        <li>
                            <a href="#itinerary">
                                <b>ITINERARY</b>
                                <span></span><!-- icon -->
                            </a>
                        </li>
                        <li>
                            <a href="#price">
                                <b>PRICE</b>
                                <span></span><!-- icon -->
                            </a>
                        </li>
                        <li>
                            <a href="#destinations">
                                <b>Destinations</b>
                                <span></span><!-- icon -->
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- .cd-secondary-nav -->
        </div>
        <!-- fin menu secundario -->
        
        <div class="margin-top-10 margin-bottom-50">
            <div class="container">
                <!-- Featured -->
                <div class="col-lg-8">
                    <div class="search-result">
                        <div class="row" id="overview">
                            <h2>Overview</h2>
                            <!-- Featured Ends! -->
                            <div class="row">
                                <ul class="row">
                                    <?php
                                        $consulta = "SELECT * FROM titinerario WHERE idpaquetes = '$registro[idpaquetes]' ORDER BY dia";
                                        $ejecutar_consulta = $conexion->query($consulta);
                                        while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                            echo '
                                                <li><b>Day '.$listado["dia"].':</b> '.ucwords(strtolower($listado["titulo"])).' </li>
                                            ';
                                        }
                                    ?>
                                </ul>
                                <h3 class="text-16"><b>Included</b></h3>
                                <?php
                                    echo $registro["incluye"];
                                ?>
                                <h3 class="text-16"><b>Not Included</b></h3>
                                <?php
                                    echo $registro["noincluye"];
                                ?>

                            </div>
                        </div>
                        <div class="row" id="itinerary">
                            <h2>Itinerary</h2>
                            <!-- Featured Ends! -->
                            <div class="row">

                                <?php
                                    $consulta = "SELECT * FROM titinerario WHERE idpaquetes = '$registro[idpaquetes]' ORDER BY dia";
                                    $ejecutar_consulta = $conexion->query($consulta);
                                    while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                        echo '
                                            <h3 class="text-16"><b>Day '.$listado["dia"].':</b> '.$listado["titulo"].'</h3>
                                            <p><img src="../../img/itinerarios/'.$listado["imagen"].'" alt="'.$listado["titulo"].'" width="50" class="pull-right"></p>
                                            <p>'.$listado["descripcion"].'</p>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="row" id="price">
                            <h2>Price</h2>
                            <!-- Featured Ends! -->
                            <div class="row">
                                <h3 class="text-16">Simple</h3>
                                <table class="table table-striped table-hover table-condensed">
                                    <thead>
                                        <tr class="info">
                                            <th>2 Star</th>
                                            <th>3 Star</th>
                                            <th>4 Star</th>
                                            <th>5 Star</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                                $consulta = "SELECT * FROM tpreciopaquetes WHERE idpaquetes = '46' GROUP BY estrellas ORDER BY estrellas";
                                                $ejecutar_consulta = $conexion->query($consulta);
                                                while ($lista = $ejecutar_consulta->fetch_assoc()) {
                                                    echo '
                                                        <td>$ '.$lista["precio"].'</td>

                                                    ';
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        <div class="row" id="destinations">
                            <h2>Destinations</h2>
                            <!-- Featured Ends! -->
                            <div class="row">
                                <?php
                                    $consulta = "SELECT tdestinos.nombre FROM tpaquetesdestinos
                                    LEFT JOIN tdestinos
                                    ON tpaquetesdestinos.iddestinos = tdestinos.iddestinos
                                    WHERE tpaquetesdestinos.idpaquetes = '$registro[idpaquetes]'";
                                    $ejecutar_consulta = $conexion->query($consulta);
                                    while ($destinos = $ejecutar_consulta->fetch_assoc()) {
                                        echo '
                                            <div class="col-lg-6">
                                                <div class="box-relative">
                                                    <img src="img/slider/slideshow1.jpg" alt="">
                                                    <div class="box-absolute-bottom bg-white-rgba margin-bottom-10 text-center">
                                                        <h6>'.$destinos["nombre"].'</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        
                            
                            <div class="content-video-1">
                                    <img src="img/video/video.jpg" alt="video">
                                    
                                    <div class="content-video-btn-1">
                                        <a href="https://www.youtube.com/watch?v=HfBo74hJId0"  class="html5lightbox content-vbtn-color-orange" data-width="570" data-height="320" title="title here "><i class="fa fa-play-circle"></i></a>
                                    </div>
                                </div>
                        
                    </div>
                    <div class="row">
                        <div class="search-result">
                            <h2>Other Programs</h2>
                            <ul class="row text-18">
                                <?php
                                    $consulta = "SELECT * FROM tpaquetes ORDER BY duracion";
                                    $ejecutar_consulta = $conexion->query($consulta);
                                    while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                        echo '
                                            <li><a href="http://mountaintourscusco.com/peru-tours/'.str_replace(' ','-', strtolower($listado["titulo"])).'-'.$listado["duracion"].'-days-tours/"><i class="fa fa-chevron-right text-info"></i> '.ucfirst(strtolower($listado["titulo"])).'</li></a>
                                        ';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php include("include/footer.php"); ?>

</body>
</html>