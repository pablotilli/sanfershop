<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarPublicaciones($busqueda, $id_categoria, $orden, $precio_desde, $precio_hasta){

        $conexion = getConexion();

        $consulta = "SELECT pub_id, pub_titulo, SUBSTRING(pub_descripcion, 1, 100) AS pub_descripcion, pub_precio, pub_id_categoria, pub_id_usuario, pub_id_tipo_publicacion, pub_imagen " . 
                  "FROM publicaciones ";

        if ( $busqueda != "" ){

           $consulta .= " WHERE (pub_titulo LIKE '%" . $busqueda . "%' OR pub_descripcion LIKE '%" . $busqueda . "%')";
        }

        if ( $precio_desde ){

            if ( $busqueda == "" ){
                $consulta .= " WHERE ";
            }else{
                $consulta .= " AND ";
            }

            $consulta .= " pub_precio >= " . $precio_desde;            
        }

        if ( $precio_hasta ){
            $consulta .= " AND pub_precio <= " . $precio_hasta;            
        }

        if ( $id_categoria >= 0 )
        {
            
            if ( $precio_desde ) {
                $consulta .= " AND ";
            }
            else
            {
                $consulta .= " WHERE ";
            }

            $consulta .= " pub_id_categoria = " . $id_categoria;

        }

        $consulta .= " ORDER BY " . $orden;

        $resultado = $conexion->query( $consulta );


        return $resultado;
	}

    function buscarPublicacion( $id_publicacion ){
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                  "FROM publicaciones " . 
                  "WHERE pub_id = " . $id_publicacion;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function buscarPublicacionesUsuario( $id_usuario ){
        $conexion = getConexion();

        $consulta = "SELECT pub_id, pub_titulo, SUBSTRING(pub_descripcion, 1, 100) AS pub_descripcion, pub_precio, pub_id_categoria, pub_id_usuario, pub_id_tipo_publicacion, pub_imagen " . 
                  "FROM publicaciones " . 
                  "WHERE pub_id_usuario = " . $id_usuario;


        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function buscarPublicacionesFavoritasUsuario( $id_usuario ){

        $conexion = getConexion();

        $consulta = "SELECT pub_id, pub_titulo, SUBSTRING(pub_descripcion, 1, 100) AS pub_descripcion, pub_precio, pub_id_categoria, pub_id_usuario, pub_id_tipo_publicacion, pub_imagen " . 
                  "FROM publicaciones " . 
                  "WHERE pub_id IN ( SELECT  fav_usr_id_publicacion  FROM favoritos_usuarios WHERE fav_usr_id_usuario = " . $id_usuario . ")";

        $resultado = $conexion->query( $consulta );

        return $resultado;

    }

    function eliminarPublicacion( $id_publicacion ){

        $conexion = getConexion();

        $sql = "DELETE FROM publicaciones " .         
               " WHERE pub_id = " . $id_publicacion;

        $resultado = $conexion->query( $sql );

    }

    function agregarPublicacion( $publicacion ){

        $conexion = getConexion();

        $sql = "INSERT INTO publicaciones " . 
                    "(pub_titulo, pub_descripcion, pub_precio, pub_id_categoria, pub_id_usuario, pub_id_tipo_publicacion, pub_imagen)" 
                        . " VALUES ('" 
                        . $publicacion["titulo"] . "', '"
                        . $publicacion["descripcion"] . "', "
                        . $publicacion["precio"] . ", "
                        . $publicacion["id_categoria"] . ", "
                        . $publicacion["id_usuario"] . ","
                        . $publicacion["id_tipo_publicacion"] . ", '"
                        . $publicacion["imagen"] . "'"

                     . ")";

        $conexion->query( $sql );

    }

    function modificarPublicacion( $publicacion ){

        $conexion = getConexion();

        $sql = "UPDATE publicaciones SET " . 
                    "pub_titulo= \"" . $publicacion["titulo"] . "\"" .
                    ", pub_descripcion=\"" . $publicacion["descripcion"] . "\"". 
                    ", pub_precio=" . $publicacion["precio"] .
                    ", pub_id_categoria=" . $publicacion["id_categoria"] .
                    ", pub_id_usuario=" . $publicacion["id_usuario"] .
                    ", pub_id_tipo_publicacion=" . $publicacion["id_tipo_publicacion"];

        if ( $publicacion["imagen"] ){
            $sql .= ", pub_imagen=\"" . $publicacion["imagen"] . "\"";
        }
        
        $sql .= " WHERE pub_id = " . $publicacion["id"];



        $conexion->query( $sql );



    }
?>