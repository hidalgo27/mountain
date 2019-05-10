<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Montain C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="author" type="text/plain" href="../humans.txt">
    <link href="../img/slider/machupicchu.jpg" rel="image_src"/>

    <!-- Loading Bootstrap -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- main style sheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/menu_topexpand.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!-- Font Awesome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="../ico/favicon.ico">
    <link href="../ico/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../ico/apple-touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-ipad.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-iphone-retina-display.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-ipad-retina-display.png"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php include ("mtc-admin/models/conexion.php"); ?>
</head>

    <?php include ("include/header.php"); ?>

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
    		<div class="item  margin-top-50" id="feature-8">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                <h1>Perú Tours</h1>
                                <!-- <div class="sec-title-div-3"></div> -->
                                <h6 class="color-blue">Conoce las maravillas naturales y legados Incaicos en su viaje al Perú</h6>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        <!-- /.item -->


        <div class="margin-top-10 margin-bottom-50">
            <div class="container">
                <!-- Featured -->
                <div class="search-result">
                    
                    <!-- Featured Ends! -->
                    <div class="row masonry-container">
                        <?php
                            $consulta = "SELECT * FROM tpaquetes ORDER BY duracion";
                            $ejecutar_consulta = $conexion->query($consulta);

                            while ($listado = $ejecutar_consulta->fetch_assoc()) {
                                echo '
                                    <div class="col-lg-4 margin-bottom-30 item">
                                        <a href="../peru-tours/'.str_replace(' ','-', strtolower($listado["titulo"])).'-'.$listado["duracion"].'-dias-tours/">
                                            <div class="box-relative">
                                                <img src="../img/paquetes/'.$listado["imagen"].'" alt="'.$listado["titulo"].'">
                                                <div class="box-absolute-bottom bg-white-rgba margin-bottom-10 text-center">
                                                    <h6>'.$listado["titulo"].'</h6>
                                                    <div class="line"></div>
                                                    <p class="margin-top-10 color-orange-1"><b>'.$listado["duracion"].' dia | Preguntar</b></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                ';
                            }
                        ?>            
                    </div>
                </div>
            </div>
        </div>
    <?php include ("include/footer.php"); ?>