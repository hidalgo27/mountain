<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Montain C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="author" type="text/plain" href="humans.txt">
    <link href="img/slider/machupicchu.jpg" rel="image_src"/>

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- main style sheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/menu_topexpand.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="ico/favicon.ico">
    <link href="ico/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-iphone.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-ipad.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-iphone-retina-display.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-ipad-retina-display.png"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <?php include ("mtc-admin/models/conexion.php"); ?>
</head>
    
    <?php include("include/header.php"); ?>
        <!-- slider -->
    		<div class="slider">
                <span class="text-center">
                    <!-- <img src="img/logo-mountain2.png" alt="logo slider"> -->
                    <a href="#content-area-3" class="cd-btn margin-top-100">Contáctenos Ahora</a>
                </span><!-- Logo in slider -->
                <div class="container">
                    <ul class="slides row">
                        <li style="" class="slider-background-3">
                            <div class="overlay"></div><!-- Overlay for slide -->
                            <!-- <h3>Discover our area by boat. Choose your adventure3!</h3> -->
                        </li>
                        <li style="" class="slider-background-1">
                            <div class="overlay"></div><!-- Overlay for slide -->
                        </li>
                        <li style="" class="slider-background-2">
                            <div class="overlay"></div><!-- Overlay for slide -->
                            <!-- <h3>Discover our area by bike. Choose your adventure!2</h3> -->
                        </li>
                    </ul>
                </div>
            </div>
    	<!-- end slider -->

        <!--  -->
    		<div class="item  margin-top-50" id="feature-8">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                <h1>Por qué conocer Perú</h1>
                                <!-- <div class="sec-title-div-3"></div> -->
                                <h6 class="color-blue">Conoce Perú y conviértete en un afortunado viajero, espectador de su belleza infinita.</h6>
                                <p>En Perú vivirás emociones inolvidables. En la costa, podrás dominar olas sobre caballitos de totora, tablas de surf y disfrutar de la puesta del sol en un oasis con protectoras dunas. En la sierra, con el sonido de quenas en el viento, respirarás el aire puro de los Andes y contemplarás la armonía del hombre con la naturaleza en Machu Picchu. En la selva, el imponente río Amazonas te dará la bienvenida con delfines rosados y frondosos árboles que ocultan el cielo. Recorrer el Perú es un sentimiento profundo. Atrévete a vivirlo.</p>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        <!-- /.item -->


        <div class="margin-top-10 margin-bottom-50">
            <div class="container">
                <!-- Featured -->
                <div class="featured col-lg-12">

                    <!-- Block -->
                    <div class="block">
                        <h4>Tours por categorías</h4>
                        <img src="img/banners/feature1.jpg" alt="categorias">
                        <!-- PopUp -->
                        <div>
                            <a href="#" class="close"><i class="fa fa-times"></i></a>
                            <h3>Tours por categorías</h3>
                            <p>Explore nuestros paquetes turísticos organizados según su categoría y encuentre su viaje ideal al Perú, país de una mística cultura.</p>
                            <h5>Categorías Actuales:</h5>
                            <ul>
                                <?php
                                    $consulta = "SELECT * FROM tcategoria ORDER BY nombre LIMIT 5";
                                    
                                    $ejecutar_consulta = $conexion->query($consulta);
                                    while ($category = $ejecutar_consulta->fetch_assoc()) {
                                        echo '
                                            <li><a href="peru-tours/'.str_replace(' ','-', strtolower($category["nombre"])).'/">'.ucwords(strtolower($category["nombre"])).'</a></li>
                                        ';
                                    }
                                ?>
                            </ul>
                            <p class="text-right"><a href="peru-tours/" class="btn btn-link">Todos los paquetes <i class="fa fa-angle-double-right"></i></a></p>
                        </div>
                        <!-- PopUp Ends ! -->
                    </div>
                    <!-- Block Ends ! -->

                    <!-- Block -->
                    <div class="block">
                        <img src="img/banners/feature2.jpg" alt="destinos">
                        <h4>Destinos Perú</h4>
                        <!-- PopUp -->
                        <div>
                            <a href="#" class="close"><i class="fa fa-times"></i></a>
                            <h3>Destinos</h3>
                            <p>Conoce Perú, país místico rica en culturas legendarias y lugares extraordinarios únicos es el mundo. Nuestro equipo se dedico a explorar el Perú durante mucho tiempo y así crear paquetes turísticos que garantizaran una experiencia única. </p>
                            <h5>Destinos destacados:</h5>
                            <ul>
                                <?php
                                    $consulta = "SELECT * FROM tpaquetes ORDER BY estado DESC LIMIT 5";
                                    $ejecutar_consulta = $conexion->query($consulta);
                                    while ($paquetes = $ejecutar_consulta->fetch_assoc()) {
                                        echo '
                                            <li><a href="peru-tours/'.str_replace(' ','-', strtolower($paquetes["titulo"])).'-'.$paquetes["duracion"].'-dias-tours/">'.$paquetes["duracion"].' Dias '.ucwords(strtolower($paquetes["titulo"])).'</a></li>
                                        ';
                                    }
                                ?>
                                
                            </ul>
                            <p class="text-right"><a href="viajes-peru/" class="btn btn-link">Todos los destinos <i class="fa fa-angle-double-right"></i></a></p>
                        </div>
                        <!-- PopUp Ends ! -->
                    </div>
                    <!-- Block Ends ! -->

                    <!-- Block -->
                    <div class="block">
                        <img src="img/banners/feature3.jpg" alt="transportes">
                        <h4>Servicio de transporte</h4>
                        <!-- PopUp -->
                        <div>
                            <a href="#" class="close"><i class="fa fa-times"></i></a>
                            <h3>Servicio de transporte en cusco</h3>
                            <p>los lugares turísticos para explorar Perú son múltiples y contamos con transportes en la ciudad del Cusco y servicios adicionales.</p>
                            <h5>Traslados y servicios</h5>
                            <p>Nuestra experiencia como agencia garantiza un servicio de calidad en traslados y tours en Cusco que vera a detalles en la sección de transportes.</p>
                            <p class="text-right"><a href="transporte/" class="btn btn-link">Ver mas<i class="fa fa-angle-double-right"></i></a></p>
                        </div>
                        <!-- PopUp Ends ! -->
                    </div>
                    <!-- Block Ends ! -->

                </div>
                <!-- Featured Ends! -->

            </div>
          </div>


        <div class="item padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <img src="img/banners/banner-1.jpg" alt="" class="padding-top-5">
                    </div><!-- /.col-md-6 col -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="content-area-3">
                            <div class="content-area-title-1 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <h5 class="margin-top-0">Viaje a Perú<br> con Mountain Cusco Tours</h5>
                            </div>
                            <div class="feature-disc-1 margin-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
                                <p>Nosotros ejercemos  la actividad de turismo durante 9 años como guías en las diferentes actividades de caminatas, el camino inca clásico,inca jungle , salkantay, lares, ausangate, choquequirao-machupicchu y lo tradicional en la ciudad del Cusco a partir del año 2012 fuimos organizando viajes orientado al turismo interno y poco a poco vamos trabajando con el turismo externo de ventas directas  y recomendaciones, despues de 2 años Cesar viajó por Norteamerica y Centroamerica para ganar mas experiencia de trabajo, así como también adquirir experiencia en  el estándar de calidad de servicios orientado  a la atención de pasajeros.</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-6 col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        
        </div><!-- /.item -->

    <?php include("include/footer.php"); ?>    
    <!-- end olark code -->

</body>
</html>