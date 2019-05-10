
<body>
    
    <div id="page" class="page">
        <header class="header" id="header">
            <div class="social-top header-social">
                <div class="container">
                    <div class="col-lg-3 text-left">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100010995098255" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/MTCUSCO" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
                            <!-- <li><a href="https://www.facebook.com/profile.php?id=100010995098255" target="_blank"><img src="ico/facebook.ico" alt="icono facebook"></a></li>
                            <li><a href="https://twitter.com/MTCUSCO" target="_blank"><img src="ico/twitter.ico" alt="icono twitter"></a></li> -->
                            
                            <!-- <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="color-white margin-top-40"><i class="fa fa-phone"></i> Llámenos: +51 951272936 | <b><i class="fa fa-whatsapp"></i></b> +51 987361601</h6>
                    </div>
                    <div class="col-lg-3">
                        <ul>
                            <!-- <li><a href="https://www.facebook.com/profile.php?id=100010995098255" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/MTCUSCO" target="_blank"><i class="fa fa-twitter"></i></a></li> -->
                            
                            <li><a rel="alternate" hreflang="es" href="http://www.mountaincuscotours.com/es/"><img src="http://www.mountaincuscotours.com/ico/es.ico" alt="icono español"></a></li>
                            <li><a href="http://www.mountaincuscotours.com/"><img src="http://www.mountaincuscotours.com/ico/en.ico" alt="icono ingles"></a></li>
                            <!-- <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-gral">
                <div class="container">
                    <nav>
                        <a href="http://www.mountaincuscotours.com/es/" class="text-center"><img src="http://www.mountaincuscotours.com/es/img/logo-mountain.png" alt="logo mountain tours cusco"></a>
                        <ul class="padding-top-35">
                            <li><a href="http://www.mountaincuscotours.com/es/peru-tours/">Peru Tours</a></li>
                            <li>
                                <a href="http://www.mountaincuscotours.com/es/viajes-peru/">Destinos Peru</a>
                                <ul>
                                    <?php
                                        $consulta = "SELECT * FROM tdestinos ORDER By nombre";
                                        $ejecutar_consulta = $conexion->query($consulta);

                                        while ($lista = $ejecutar_consulta->fetch_assoc()) {
                                            echo '<li><a href="http://www.mountaincuscotours.com/es/viajes-peru/'.strtolower(str_replace(' ','-',$lista["nombre"])).'/">'.ucwords(strtolower($lista["nombre"])).'</a></li>';
                                        }
                                    ?>
                                    
                                </ul>
                            </li>
                            <li><a href="http://www.mountaincuscotours.com/es/sobre-nosotros/">Sobre Nosotros</a></li>
                            <li><a href="http://www.mountaincuscotours.com/es/transporte/">Transporte</a></li>
                            <li><a href="#content-area-3">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>