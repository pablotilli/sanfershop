<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarPublicaciones($busqueda, $id_categoria, $orden){

        $conexion = getConexion();

        $consulta = "SELECT pub_id, pub_titulo, SUBSTRING(pub_descripcion, 1, 100) AS pub_descripcion, pub_precio, pub_id_categoria, pub_id_usuario, pub_id_tipo_publicacion, pub_imagen " . 
                  "FROM publicaciones ORDER BY " . $orden;


        if ( $busqueda != "" ){

           $consulta .= " WHERE (pub_titulo LIKE '%" . $busqueda . "%' OR pub_descripcion LIKE '%" . $busqueda . "%')";
        }

        if ( $id_categoria >= 0 )
        {
            
            if ( $busqueda != "" ) {
                $consulta .= " AND ";
            }
            else
            {
                $consulta .= " WHERE ";
            }

            $consulta .= " pub_id_categoria = " . $id_categoria;

        }

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

?>