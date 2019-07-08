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