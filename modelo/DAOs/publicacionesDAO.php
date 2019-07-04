<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarPublicaciones($busqueda, $id_categoria){

        $conexion = getConexion();

        $consulta = "SELECT pub_id, pub_titulo, SUBSTRING(pub_descripcion, 1, 100) AS pub_descripcion, pub_precio, pub_id_categoria, pub_id_usuario, pub_id_tipo_publicacion, pub_imagen " . 
                  "FROM publicaciones";

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

?>