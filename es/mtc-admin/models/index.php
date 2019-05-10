<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Travel Plans</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/estilos.css" rel="stylesheet">
	<link href="../css/tm_docs.css" rel="stylesheet">
	<!-- <link href="css/carousel.css" rel="stylesheet"> -->
	<!-- Custom Theme CSS -->
    <!-- <link href="../css/grayscale.css" rel="stylesheet"> -->
    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <!-- <link href="css/navbar.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<div class="container-fluid logo-cabecera">
			<!-- <h1></h1> -->
			<div class="col-md-6 text-left">
				<img src="../img/img-logo.png" alt="Logo de goto Per&uacute; travels">
			</div>
		</div>
	</header>

	<section id="about" class="content-section">
		<div class="container marketing">
			<div class="col-md-4 col-md-offset-4 well">
				<?php
                error_reporting(E_ALL ^ E_NOTICE);
                    if($_GET["error"]=="si"){
                        echo "<div class='alert alert-danger'>
                              <button type='buttom' class='close' data-dismiss='alert'>&times;</button>
                              <h4><strong>Datos Incorrectos...!!!</strong></h4>
                              <p>Combinación incorrecta de usuario/contraseña. La contraseña y el usuario que ingresaste no concuerdan</p>
                            </div>";
                    }else{
                        echo "";
                    }
                ?>
                <hr>
                <form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario_txt" placeholder="Ingrese su usuario" title="Ingrese su usuario" size="2" required>
                  </div>
                  <div class="form-group">
                    <label for="contrasenia">Contrase&ntilde;a</label>
                    <input type="password" class="form-control" id="contrasenia" name="contrasenia_txt" placeholder="Ingrese su contrase&nacute;a" title="Ingrese su contrase&nacute;a" required>
                  </div>
                  <button type="submit" class="btn btn-lg btn-success">Iniciar</button>
                </form>
			</div>
		</div> <!--markwting--><br><br>
	</section>


    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Custom Theme JavaScript -->

</body>
</html>