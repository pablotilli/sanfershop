<?php

include_once PATH_DAOS . '/publicacionesDAO.php';

if ( isset($_REQUEST["a"]) ){

  switch ( $_REQUEST["a"] ){

    case "add":

      $publicacion["titulo"] = $_POST["titulo"];

      $publicacion["descripcion"] = $_POST["descripcion"];

      $publicacion["precio"] = $_POST["precio"];

      $publicacion["id_categoria"] = $_POST["categoria"];

      $publicacion["id_usuario"] = $_SESSION["id_usuario"];

      $publicacion["id_tipo_publicacion"] = $_POST["tipo_publicacion"];

      subirImagenYGuardar($publicacion);

      break;

    case "new":

      include "form_edicion_publicacion.inc.php";    

      break;

    case "list":

      include "listado_publicaciones_usuario.inc.php"; 
      
      break;

    case "edit":

        include "form_edicion_publicacion.inc.php";

        break;

    case "del":
        eliminarPublicacion( $_GET["id"] );

        header( "Location: index.php?m=pubs&a=list&s=" . urlencode("Se ha eliminado la publicacion.") . "&t=success");

        break;

    case "update":
    
      $publicacion["id"] = $_POST["id"];

      $publicacion["titulo"] = $_POST["titulo"];

      $publicacion["descripcion"] = $_POST["descripcion"];

      $publicacion["precio"] = $_POST["precio"];

      $publicacion["id_categoria"] = $_POST["categoria"];

      $publicacion["id_usuario"] = $_SESSION["id_usuario"];

      $publicacion["id_tipo_publicacion"] = $_POST["tipo_publicacion"];

      $publicacion["imagen"] = null;

      //Guardo la imagen de la publicacion
      subirImagenYGuardar($publicacion, true);


  }

}

function subirImagenYGuardar($publicacion, $esModificacion=false){

      //Guardo la imagen de la publicacion
      if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
          

          $fileTmpPath = $_FILES['imagen']['tmp_name'];
          $fileName = $_FILES['imagen']['name'];

          $fileNameCmps = explode(".", $fileName);
          $fileExtension = strtolower(end($fileNameCmps));

          $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

          $allowedfileExtensions = array('jpg', 'gif', 'png', 'webp');

          if (in_array($fileExtension, $allowedfileExtensions)) {
                        
            $dest_path = UPLOAD_PUB_IMAGE_PATH . "/" . $newFileName;
             
            if(move_uploaded_file($fileTmpPath, $dest_path))
            {
              $publicacion["imagen"] = $newFileName;

              

              if ( $esModificacion ){
                  modificarPublicacion( $publicacion );
                  
                  $mensaje_ok = "Modificado correctamente.";

              }
              else{
                  agregarPublicacion( $publicacion );
                  
                  $mensaje_ok = "Pubicado correctamente.";  
              }
              
              header( "Location: index.php?m=pubs&a=list&s=" . urlencode($mensaje_ok) . "&t=success");
            }
            else
            {

              $mensaje_form = "ERROR AL SUBIR EL ARCHIVO";

              include "form_edicion_publicacion.inc.php"; 
            }
          }
          else{
              $mensaje_form = "El archivo de imagen no es valido.";

              include "form_edicion_publicacion.inc.php"; 
          }
        }
        else{
              if ( $esModificacion ){
                  modificarPublicacion( $publicacion );

                  header( "Location: index.php?m=pubs&a=list&s=" . urlencode("Modificado correctamente.") . "&t=success");
              }
        }

}



?>



</div>