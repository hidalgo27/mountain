<?php
//El parametro de $extension determina que tipo de imagen no se borrara por ejemplo si es jpg significa que la imagen con extension .jpg se queda en el servidor y si existen imagenes con el mismo nombre pero con extension png o gif se eliminaran, con esta funcion evito tener imagenes duplicadas con distintas extensiones para cada perfil la funcion file_exists evalua si una archivo existe y la funcion unlink borra un archivo del servidor
function borrar_imagenes($ruta,$extension){
    switch ($extension) {
        case '.jpg':
            if (file_exists($ruta.".png"))
                unlink($ruta.".png");
            if (file_exists($ruta.".gif"))
                unlink($ruta.".gif");
            break;
        case '.gif':
            if (file_exists($ruta.".png"))
                unlink($ruta.".png");
            if (file_exists($ruta.".jpg"))
                unlink($ruta.".jpg");
            break;
        case '.png':
            if (file_exists($ruta.".jpg"))
                unlink($ruta.".jpg");
            if (file_exists($ruta.".gif"))
                unlink($ruta.".gif");
            break;
    }
}


//funcion para subir la imagen del perfil del usuario
function subir_imagen($tipo,$imagen,$email)
{
    //strstr($cadena1,$cadena2) sirve para evaaluar si en la primer cadena de texto existe la segunda cadena de texto
    //si dentro del tipo del archivo se encuentra la palabra image significa que el archivo es una imagen
    if (strstr($tipo, "image")) {
        //para saber de que tipo de extension es la imagen
        if (strstr($tipo, "jpeg"))
            $extension = ".jpg";
        else if (strstr($tipo, "gif"))
            $extension = ".gif";
        else if (strstr($tipo, "png"))
            $extension = ".png";

        //para saber si la imagen tiene el ancho correcto que es de 420px
        $tam_img = getimagesize($imagen);
        $ancho_img = $tam_img[0];
        $alto_img = $tam_img[1];

        $ancho_img_deseado = 700;
        //si la imagen es mayor en su ancho que 420px, reajusto su tamaño
        if ($ancho_img>$ancho_img_deseado) {
            //Por una regla de 3 obtengo el alto de la imagen de manera proporcional al ancho nuevo que sera de 420
            $nuevo_ancho_img = $ancho_img_deseado;
            $nuevo_alto_img = ($alto_img/$ancho_img)*$nuevo_ancho_img;
            //creo una imagen en color real con las nuevas dimensiones
            $img_reajustada = imagecreatetruecolor($nuevo_ancho_img, $nuevo_alto_img);
            //creo una imagen basada en la original, dependiedno de su extension es de tipo que creare
            switch ($extension) {
                case '.jpg':
                    $img_original = imagecreatefromjpeg($imagen);
                    //reajusto la imagen nueva con respecto a la original
                    imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    //guardo la imagen reescalada en el servidor
                    $nombre_img_ext = "../../../img/itinerarios/".$email.$extension;
                    $nombre_img = "../../../img/itinerarios/".$email;
                    imagejpeg($img_reajustada,$nombre_img_ext,100);
                    //ejecuto la funcion para borrar posibles imagenes dobles para el perfil
                    borrar_imagenes($nombre_img,".jpg");
                    break;
                case '.gif':
                    $img_original = imagecreatefromgif($imagen);
                    //reajusto la imagen nueva con respecto a la original
                    imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    //guardo la imagen reescalada en el servidor
                    $nombre_img_ext = "../../../img/itinerarios/".$email.$extension;
                    $nombre_img = "../../../img/itinerarios/".$email;
                    imagegif($img_reajustada,$nombre_img_ext,100);
                    //ejecuto la funcion para borrar posibles imagenes dobles para el perfil
                    borrar_imagenes($nombre_img,".gif");
                    break;
                case '.png':
                    $img_original = imagecreatefrompng($imagen);
                    //reajusto la imagen nueva con respecto a la original
                    imagecopyresampled($img_reajustada, $img_original, 0, 0, 0, 0, $nuevo_ancho_img, $nuevo_alto_img, $ancho_img, $alto_img);
                    //guardo la imagen reescalada en el servidor
                    $nombre_img_ext = "../../../img/itinerarios/".$email.$extension;
                    $nombre_img = "../../../img/itinerarios/".$email;
                    imagepng($img_reajustada,$nombre_img_ext);
                    //ejecuto la funcion para borrar posibles imagenes dobles para el perfil
                    borrar_imagenes($nombre_img,".png");
                    break;
            }

        }else{
            //no se reajusta y se sube
            //guardo la ruta que tendra en el serbidor la imagen
            $destino = "../../../img/itinerarios/".$email.$extension;
            //se sube la foto
            move_uploaded_file($imagen, $destino) or die("No se pudo subir la imagen al servidor :(");
            //Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
            $nombre_img = "../../../img/itinerarios/".$email;
            borrar_imagenes($nombre_img,$extension);
        }
        //Asigno el nombre de la foto que se guardara en la BD como cadena de texto
        $imagen = $email.$extension;
        return $imagen;
    }else{
        return false;
    }
}
 ?>