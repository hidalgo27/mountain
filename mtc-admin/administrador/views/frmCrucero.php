   <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $op = $_GET["op"];
    switch ($op) {
      case "alta-crucero":
        $contenido = "../php/alta-crucero.php";
        $titulo = "Alta de Crucero";
        break;
      case "alta-precioCrucero":
        $contenido = "../php/alta-precioCrucero.php";
        $titulo = "Alta precio crucero";
        break;
      case "listar-crucero":
        $contenido = "../php/listar-crucero.php";
        $titulo = "Cambios a contacto";
        break;
      case "consultas":
        $contenido = "php/consultas-contacto.php";
        $titulo = "Consultas a contacto";
        break;
      default:
        $contenido = "php/home.php";
        $titulo = "Mis contactos v1";
        break;
    }
    ?>
   <?php include("header.php"); ?>

    <div class="margin-top-30">
        <div class="container-fluid">
            <div class="row">
                <?php include($contenido); ?>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.inline( 'descripcion_txta' );
    </script>
    <?php include("footer.php"); ?>
