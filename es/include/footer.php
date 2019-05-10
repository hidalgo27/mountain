        <div class=" item padding-top-60 padding-bottom-50 bg-fixed" id="content-area-4">
            <div class="row">
                <div class="section-title-1 tx-center margin-bottom-30 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                    <h3 class="color-white">TOURS DESTACADOS</h3>
                    <h6 class="color-orange-1">Conoce Perú y conviértete en un afortunado viajero, espectador de su belleza infinita.</h6>
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
                                <a href="http://www.mountaincuscotours.com/es/peru-tours/'.str_replace(' ','-', strtolower($listado["titulo"])).'-'.$listado["duracion"].'-dias-tours/">
                                    <div class="content-area-2 clearfix">
                                        <div class="content-area-figure-1">
                                            <img src="http://www.mountaincuscotours.com/es/img/paquetes/'.$listado["imagen"].'" alt="'.$listado["titulo"].'">
                                        </div>
                                        <div class=" col-md-12 ">
                                            <div class="travel-duration tx-center">
                                                <p class="date color-white">'.$listado["duracion"].'</p>
                                                <p class="days color-white">dias</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-8 content-area-title-1">
                                            <h6 class="tx-left">'.$listado["titulo"].'</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-4 travel-price">
                                            <h6>Preguntar</h6>
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
                    <h3 class="">TESTIMONIALS</h3>
                </div>
            </div>
                <div class="col-md-12 ">
                    <div id="owl-testimonial-1" class="testimonials-ct">
                        <div class="item">
                            <div class="col-lg-4">
                                <div class="content-video-1">
                                    <img src="img/testimonials/tes-1.jpg" alt="video">
                                    <div class="content-video-btn-1">
                                        <a href="img/testimonials/tes-1.jpg"  class="html5lightbox content-vbtn-color-orange"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="content-video-1">
                                    <img src="img/testimonials/tes-2.jpg" alt="video">
                                    <div class="content-video-btn-1">
                                        <a href="img/testimonials/tes-2.jpg"  class="html5lightbox content-vbtn-color-orange"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="content-video-1">
                                    <img src="img/testimonials/tes-3.jpg" alt="video">
                                    <div class="content-video-btn-1">
                                        <a href="img/testimonials/tes-3.jpg"  class="html5lightbox content-vbtn-color-orange"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="col-lg-4">
                                <div class="content-video-1">
                                    <img src="img/testimonials/tes-4.jpg" alt="video">
                                    <div class="content-video-btn-1">
                                        <a href="img/testimonials/tes-4.jpg"  class="html5lightbox content-vbtn-color-orange"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="content-video-1">
                                    <img src="img/testimonials/tes-5.jpg" alt="video">
                                    <div class="content-video-btn-1">
                                        <a href="img/testimonials/tes-5.jpg"  class="html5lightbox content-vbtn-color-orange"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="content-video-1">
                                    <img src="img/testimonials/tes-6.jpg" alt="video">
                                    <div class="content-video-btn-1">
                                        <a href="img/testimonials/tes-6.jpg"  class="html5lightbox content-vbtn-color-orange"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
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
                        <h3 class="color-white">Obtenga una cotización gratuita</h3>
                        <h6 class="color-orange-1">Explora las maravillas del Perú: Cuna de la cultura inca. Contáctenos y comienze una experiencia inolvidable.</h6>
                    </div>
                </div>
                    <div class="row contact-form-1">
                        <form id="u_form" name="contact" class="form-horizontal">
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                                
                                <input placeholder="NOMBRES" name="fname" id="u_name" required="required" type="text">
                            </div><!-- /.col-md-6 col -->
                            
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                                
                                <input placeholder="EMAIL" name="email" id="u_email" required="required" type="email">
                            </div><!-- /.col-md-6 col -->
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0.1s">
                                
                                <input placeholder="NUMERO DE TELEFONO" name="phone" id="u_phone" required="required" type="text">
                            </div><!-- /.col-md-6 col -->
                            <div class="col-md-6 col-sm-4 col-xs-12 os-animation margin-bottom-10" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                                
                                <input placeholder="PAIS" name="country" id="u_country" required="required" type="text">
                            </div><!-- /.col-md-4 col -->
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-10">
                                <textarea  name="message" id="u_message" placeholder="MENSAJE"></textarea>
                            </div><!-- /.col-md-4 col -->
                            <div class="hide">
                                <input type="text" id="u_last" name="last_txt">
                                <input type="text" id="u_first" name="first_txt">
                                <input type="text" id="u_numphone" name="numphone_txt">
                                <input type="email" id="u_email2" value="" name="email2">
                            </div>
                            <input name="cuestion" type="hidden" id="cuestion" value="cuestion">
                            <div class="col-md-12 col-sm-12 col-xs-12 tx-center">
                                <input name="send" onclick="cargaSendMailContact()" type="button" value="ENVIAR" class="form-btn" id="u_submit"></input>
                            </div><!-- /.col-md-4 col -->
                            <div id="contact_results" class="hide">
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
    
    <script type="text/javascript" src="http://www.mountaincuscotours.com/es/js/jquery-1.11.1.min.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/jquery.js"></script><!-- jquery 1.11.2 -->
    <script src="http://www.mountaincuscotours.com/es/js/bootstrap.min.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/classie.js"></script>
    
    <script src="http://www.mountaincuscotours.com/es/mail/contact.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/jquery.countTo.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/jquery.waypoints.min.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/application.js"></script>   
    <script src="http://www.mountaincuscotours.com/es/js/owl.carousel.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/triger.js" type="text/javascript"></script>
    <script src="http://www.mountaincuscotours.com/es/js/viedolightbox/video.js"></script>

    <script src="http://www.mountaincuscotours.com/es/js/jquery.flexslider-min.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/bootstrap-datepicker.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/isotope.pkgd.min.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/theme.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/menu.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/imagesLoaded.js"></script>
    <script src="http://www.mountaincuscotours.com/es/js/masonry.pkgd.min.js"></script>

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
    <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
    f[z]=function(){
    (a.s=a.s||[]).push(arguments)};var a=f[z]._={
    },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
    f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
    0:+new Date};a.P=function(u){
    a.p[u]=new Date-a.p[0]};function s(){
    a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
    hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
    return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
    b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
    b.contentWindow[g].open()}catch(w){
    c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
    var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
    b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
    loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
    /* custom configuration goes here (www.olark.com/documentation) */
    olark.identify('9760-104-10-4927');/*]]>*/</script><noscript><a href="https://www.olark.com/site/9760-104-10-4927/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>