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
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- main style sheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/menu_topexpand.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!-- Font Awesome -->
    <link href="../css/font-awesome.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.ico">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div id="page" class="page">
        <div class="item subsciption-page-2 padding-top-70 padding-bottom-150" id="subsciption-page-2">
            <div class="container">
                <div class="row"><!--.row -->   
                    <div class="subscription-page-2-main col-md-8 col-sm-12 col-xs-12 clearfix  tx-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                        <div class="subscription-form-4 col-md-12 col-sm-12 col-xs-12 tx-center ">
                            <div class="header-bottom-text ">
                                <h3>Panel de acceso</h3>
                                <p>Si no tiene una cuenta contacte con el administrador</p>
                            </div>
                        </div>
                        <div class="subscription-form-4 col-md-12 col-sm-12 col-xs-12 tx-center ">
                            <!-- SIMPLE CONTACT FORM -->
                            <form name="autentificacion_frm" action="models/control.php" method="post" enctype="application/x-www-form-urlencoded">
                                <div class="row">
                                    <input class="input-field" name="usuario_txt" placeholder="Ingrese su email" required="required" type="email">
                                </div>
                                <div class="row">
                                    <input class="input-field" name="contrasenia_txt" placeholder="Ingrese su contrase&nacute;a" required="required" type="password">
                                </div>
                                <div class="row">
                                    <input class="subs-form-btn" value="INGRESAR" type="submit" id="submit_btn2">
                                </div>
                                <div class="row">
                                    <?php
                                    
                                        if(isset($_GET["error"]) AND ($_GET["error"]=="si")){
                                            echo "<div class='alert alert-danger'>
                                                  <h4><strong>Datos Incorrectos...!!!</strong></h4>
                                                  <p>Combinación incorrecta de usuario/contraseña. La contraseña y el usuario que ingresaste no concuerdan</p>
                                                </div>";
                                        }else{
                                            echo "";
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div><!-- /.row -->
            </div>
        </div>
    </div><!-- /#page -->

    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/jquery.js"></script><!-- jquery 1.11.2 -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/application.js"></script>   
  
    <!-- Custom Theme JavaScript -->

</body>
</html>