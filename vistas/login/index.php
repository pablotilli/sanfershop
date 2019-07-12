<?php 
    include_once PATH_HELPERS . '/database_helper.php';


    if ( isset( $_POST["user_name"] ) && isset( $_POST["password"] ) && 
         $_POST["user_name"] != "" && $_POST["password"] != "" ){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM usuarios " .
                    "WHERE usr_nombre_usuario = '" . $_POST["user_name"] . "'" .
                    " AND usr_password = '" . $_POST["password"] . "'";

        $resultado = $conexion->query( $consulta );


        if ( $resultado->num_rows == 1  ){

            //Obtengo el nombre del usuario

            $usuario = $resultado->fetch_assoc();

            $_SESSION["usuario"] = $usuario["usr_nombre_real"];
            $_SESSION["id_usuario"] = $usuario["usr_id"];
            

        }
        else{
            $mensaje_alerta = "Usuario y/o contraseña no valida";
        }
    }
    else{
        $mensaje_alerta = "Debe completar el usuario y la contraseña";
    }

    $contenido_seccion1 = PATH_VIEWS . "/index/partials/slider_publicidades.inc.php";
    $contenido_seccion2 = PATH_VIEWS . "/index/partials/contenido_index.inc.php";
    $contenido_listado  = PATH_VIEWS . "/index/partials/listado_index.inc.php";

    include( PATH_VIEWS . '/common/base.php' );
