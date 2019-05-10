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
                    <a href="#content-area-3" class="cd-btn margin-top-100">INQUIRE NOW</a>
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
                                <h1>Why Know Peru</h1>
                                <!-- <div class="sec-title-div-3"></div> -->
                                <h6 class="color-blue">Know Perú and become a fortunate traveler, spectator of his infinite beauty.</h6>
                                <p>In Peru, you will live unforgettable emotions. On the coast, you will dominate the waves in reed horses, surfboards and enjoy the sunset in an oasis with protective dunes. In the mountains, to the sound of flutes in the wind, you breathe the pure air of the Andes and contemplate the harmony between man and nature in Machu Picchu. In the jungle, the mighty Amazon River will welcome you with pink dolphins and leafy trees that hide the sky. Browse Peru is a deep feeling. Dare to live.</p>
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
                        <h4>Tours by category </h4>
                        <img src="img/banners/feature1.jpg" alt="">
                        <!-- PopUp -->
                        <div>
                            <a href="http://demo.mage-themes.com/themes/outdoorsy/nautical/index.html#" class="close"><i class="fa fa-times"></i></a>
                            <h3>Tours by category</h3>
                            <p>Explore our package tours organized by category and find your perfect trip to Peru, a country with a mystical culture.</p>
                            <h5>Current Category:</h5>
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
                            <p class="text-right"><a href="peru-tours/" class="btn btn-link">All packages <i class="fa fa-angle-double-right"></i></a></p>
                        </div>
                        <!-- PopUp Ends ! -->
                    </div>
                    <!-- Block Ends ! -->

                    <!-- Block -->
                    <div class="block">
                        <img src="img/banners/feature2.jpg" alt="">
                        <h4>Peru Destinations</h4>
                        <!-- PopUp -->
                        <div>
                            <a href="http://demo.mage-themes.com/themes/outdoorsy/nautical/index.html#" class="close"><i class="fa fa-times"></i></a>
                            <h3>Peru Destinations</h3>
                            <p>Peru known, legendary mystical country rich in extraordinary places and cultures is unique worldwide. Our team set out to explore Peru for a long time and create packages that guarantee a unique experience.</p>
                            <h5>HIGHLIGHTS DESTINATIONS:</h5>
                            <ul>
                                <?php
                                    $consulta = "SELECT * FROM tpaquetes ORDER BY estado DESC LIMIT 6";
                                    $ejecutar_consulta = $conexion->query($consulta);
                                    while ($paquetes = $ejecutar_consulta->fetch_assoc()) {
                                        echo '
                                            <li><a href="peru-tours/'.str_replace(' ','-', strtolower($paquetes["titulo"])).'-'.$paquetes["duracion"].'-days-tours/">'.$paquetes["duracion"].' Days '.ucwords(strtolower($paquetes["titulo"])).'</a></li>
                                        ';
                                    }
                                ?>
                                
                            </ul>
                            <p class="text-right"><a href="travel-peru/" class="btn btn-link">All destinations <i class="fa fa-angle-double-right"></i></a></p>
                        </div>
                        <!-- PopUp Ends ! -->
                    </div>
                    <!-- Block Ends ! -->

                    <!-- Block -->
                    <div class="block">
                        <img src="img/banners/feature3.jpg" alt="">
                        <h4>Only Transportation</h4>
                        <!-- PopUp -->
                        <div>
                            <a href="http://demo.mage-themes.com/themes/outdoorsy/nautical/index.html#" class="close"><i class="fa fa-times"></i></a>
                            <h3>Transport service in Cusco</h3>
                            <p>The tourist sites to explore Peru are many and we have transport in the city of Cusco and additional services.</p>
                            <h5>TRANSFERS AND SERVICES</h5>
                            <p>Our experience as agency guarantees quality service in transportation and tours in Cusco you will see details in the transport section.</p>
                            <p class="text-right"><a href="only-transportation/" class="btn btn-link">See more <i class="fa fa-angle-double-right"></i></a></p>
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
                                <h5 class="margin-top-0">TRAVEL TO PERU <br> WITH MOUNTAIN CUSCO TOURS</h5>
                            </div>
                            <div class="feature-disc-1 margin-bottom-20 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.2s">
                                <p>We practice the activity of tourism for 9 years as guidelines in the various activities of hiking, the classic Inca Trail, Inca jungle, Salkantay, Lares, Ausangate, Choquequirao-Machu Picchu and traditional activities in the city of Cusco. Since the year 2012, we organized oriented domestic tourism and little by little, we are working with external tourism direct sales and recommendations trips, after 2 years Cesar traveled through North and Central America to gain more work experience, as well as gain experience in the quality standard of services oriented to the attention of passengers.</p>
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