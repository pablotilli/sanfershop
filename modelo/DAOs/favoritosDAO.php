<?php

    include_once PATH_HELPERS . '/database_helper.php';

    function buscarFavoritosUsuario($idUsuario){

        $conexion = getConexion();

        $consulta = "SELECT fav_usr_id_publicacion " . 
                    "FROM favoritos_usuarios " .
                    "WHERE fav_usr_id_usuario=" . $idUsuario;

        $resultado = $conexion->query( $consulta );

        $array_favoritos = array();
        
        while($favorito = $resultado->fetch_assoc())
        {
            $array_favoritos[] = $favorito["fav_usr_id_publicacion"];
        }

        return $array_favoritos;
    }

    function agregarFavorito( $id_publicacion, $idUsuario){

        $conexion = getConexion();

        $consulta = "INSERT INTO favoritos_usuarios " . 
                    "(fav_usr_id_publicacion, fav_usr_id_usuario) " .
                    "VALUES (" . $id_publicacion . ", " . $idUsuario . ")";


        $resultado = $conexion->query( $consulta );

    }

    function eliminarFavorito( $id_publicacion, $idUsuario){

        $conexion = getConexion();

        $consulta = "DELETE FROM favoritos_usuarios " . 
                    "WHERE fav_usr_id_publicacion=" . $id_publicacion . " AND  fav_usr_id_usuario=" . $idUsuario;


        $resultado = $conexion->query( $consulta );

    }