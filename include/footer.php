<div class=" item padding-top-60 padding-bottom-50 bg-fixed" id="content-area-4">
            <div class="row">
                <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h3 class="color-white">HIGHLIGHTS DESTINATIONS</h3>
                    <h6 class="color-orange-1">Know Perú and become a fortunate traveler, spectator of his infinite beauty.</h6>
                </div>
            </div>
        </div><!-- /.item -->

        <div class=" item padding-top-60 padding-bottom-20">
            <div class="container">
                <div class="row">
                    <?php
                        $consulta = "SELECT * FROM tpaquetes WHERE estado='1'";
                        $ejecutar_consulta = $conexion->query($consulta);

                        while ($listado = $ejecutar_consulta->fetch_assoc()) {
                            echo '
                            <div class="col-md-4 col-sm-4 col-xs-12 text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                <a href="http://www.mountaincuscotours.com/peru-tours/'.str_replace(' ','-', strtolower($listado["titulo"])).'-'.$listado["duracion"].'-days-tours/">
                                    <div class="content-area-2 clearfix">
                                        <div class="content-area-figure-1">
                                            <img src="http://www.mountaincuscotours.com/img/paquetes/'.$listado["imagen"].'" alt="'.$listado["titulo"].'">
                                        </div>
                                        <div class=" col-md-12 ">
                                            <div class="travel-duration tx-center">
                                                <p class="date color-white">'.$listado["duracion"].'</p>
                                                <p class="days color-white">days</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-8 content-area-title-1">
                                            <h6 class="tx-left">'.$listado["titulo"].'</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-4 travel-price">
                                            <h6>Inquire</h6>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- /.col-md-4 col -->
                            ';
                        }
                    ?>
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.item -->

        <div class="item testimonial-7 padding-top-50 padding-bottom-50 hide" id="testimonial-7">
            <div class="container">
            <div class="row">
                <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h3 class="">TESTIMONIOS</h3>
                </div>
            </div>
                <div class="col-md-12 ">
                    <div id="owl-testimonial-1" class="testimonials-ct">
                        <div class="item">
                            <div class="col-lg-4">
                                <img src="http://www.mountaincuscotours.com/img/testimonials/tes-1.jpg" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="http://www.mountaincuscotours.com/img/testimonials/tes-2.jpg" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="http://www.mountaincuscotours.com/img/testimonials/tes-3.jpg" alt="">
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="col-lg-4">
                                <img src="http://www.mountaincuscotours.com/img/testimonials/tes-4.jpg" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="http://www.mountaincuscotours.com/img/testimonials/tes-5.jpg" alt="">
                            </div>
                            <div class="col-lg-4">
                                <img src="http://www.mountaincuscotours.com/img/testimonials/tes-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="padding-top-60" id="content-area-3">
            <div class="container">
                <div class="row">
                    <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                        <h3 class="color-white">GET A FREE QUOTE</h3>
                        <h6 class="color-orange-1">Explore the wonders of Peru: Cradle of the Inca culture. Contact us and start an unforgettable experience</h6>
                    </div>
                </div>
                    <div class="row contact-form-1">
                        <form id="u_form" name="contact" class="form-horizontal">
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                
                                <input placeholder="FIRST NAME" name="fname" id="u_name" required="required" type="text">
                            </div><!-- /.col-md-6 col -->
                            
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                                
                                <input placeholder="EMAIL" name="email" id="u_email" required="required" type="email">
                            </div><!-- /.col-md-6 col -->
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                                
                                <input placeholder="PHONE NUMBER" name="phone" id="u_phone" required="required" type="text">
                            </div><!-- /.col-md-6 col -->
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                                
                                <input placeholder="COUNTRY" name="country" id="u_country" required="required" type="text">
                            </div><!-- /.col-md-4 col -->
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
                                <textarea  name="message" id="u_message" placeholder="MESSAGE"></textarea>
                            </div><!-- /.col-md-4 col -->
                            <div class="hide">
                                <input type="text" id="u_last" name="last_txt">
                                <input type="text" id="u_first" name="first_txt">
                                <input type="text" id="u_numphone" name="numphone_txt">
                                <input type="email" id="u_email2" value="" name="email2">
                            </div>
                            <input name="cuestion" type="hidden" id="cuestion" value="cuestion">
                            <div class="col-md-12 col-sm-12 col-xs-12 tx-center">
                                <input name="send" onclick="cargaSendMailContact()" type="button" value="SUBMIT" class="form-btn" id="u_submit"></input>
                            </div><!-- /.col-md-4 col -->
                            <div id="contact_results">
                                <p></p>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

        
        <footer class="item footer  footer-3" id="footer-3">
            <div class="row"><!--.row -->
                        
                <div class="container"><!-- container -->
                    
                    <div class="copyright-text-2 tx-center">
                        <p><i class="fa fa-envelope-o"></i> info@mountaincuscotours.com | cesar@mountaincuscotours.com</p>
                        <p><i class="fa fa-phone"></i> +51 951272936</p>
                        <p>MOUNTAIN TOURS 2016, All Rights Reserved</p>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.row -->
        </footer><!-- /.item -->
    </div><!-- /#page -->


   <!--====================== JAVA SCRIPTS =============================-->
    
    <script type="text/javascript" src="http://www.mountaincuscotours.com/js/jquery-1.11.1.min.js"></script>
    <script src="http://www.mountaincuscotours.com/js/jquery.js"></script><!-- jquery 1.11.2 -->
    <script src="http://www.mountaincuscotours.com/js/bootstrap.min.js"></script>
    <script src="http://www.mountaincuscotours.com/js/classie.js"></script>
    
    <script src="http://www.mountaincuscotours.com/mail/contact.js"></script>
    <script src="http://www.mountaincuscotours.com/js/jquery.countTo.js"></script>
    <script src="http://www.mountaincuscotours.com/js/jquery.waypoints.min.js"></script>
    <script src="http://www.mountaincuscotours.com/js/application.js"></script>   
    <script src="http://www.mountaincuscotours.com/js/owl.carousel.js"></script>
    <script src="http://www.mountaincuscotours.com/js/triger.js" type="text/javascript"></script>
    <script src="http://www.mountaincuscotours.com/js/viedolightbox/video.js"></script>

    <script src="http://www.mountaincuscotours.com/js/jquery.flexslider-min.js"></script>
    <script src="http://www.mountaincuscotours.com/js/bootstrap-datepicker.js"></script>
    <script src="http://www.mountaincuscotours.com/js/isotope.pkgd.min.js"></script>
    <script src="http://www.mountaincuscotours.com/js/theme.js"></script>
    <script src="http://www.mountaincuscotours.com/js/menu.js"></script>
    <script src="http://www.mountaincuscotours.com/js/imagesLoaded.js"></script>
    <script src="http://www.mountaincuscotours.com/js/masonry.pkgd.min.js"></script>

    <script>
        function myFunction(){
            setTimeout(function(){
                document.getElementById('cuestion').value = 'Iam' ;
            },2000);
        };
        myFunction();
    </script>

    <script>
        (function($) {
        var $container = $('.masonry-container');
            $container.imagesLoaded( function () {
                $container.masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });
            });
        })(jQuery);
    </script>

    <!-- begin olark code -->
   <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'cbd4aacc-421c-4c65-9ba3-e03e624b9f48', f: true }); done = true; } }; })();</script>
