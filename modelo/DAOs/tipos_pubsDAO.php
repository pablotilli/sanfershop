<?php

    include_once PATH_HELPERS . '/database_helper.php';

    function buscarTiposPublicaciones(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM tipos_publicacion " .
                    "ORDER BY tp_descripcion";
                    ;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function agregarTipoPublicacion( $tipo_pub ){

        $conexion = getConexion();

        $sql = "INSERT INTO tipos_publicacion " . 
                    "(tp_descripcion)" 
                        . " VALUES ('" 
                        . $tipo_pub["descripcion"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarTipoPublicacion( $tipo_pub ){

        $conexion = getConexion();

        $sql = "UPDATE tipos_publicacion " . 
                "SET tp_descripcion = '" . $tipo_pub["descripcion"] .
                "' WHERE tp_id = " . $tipo_pub["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarTipoPublicacion( $tipo_pub ){

        $conexion = getConexion();

        $sql = "DELETE FROM tipos_publicacion " . 
                " WHERE tp_id = " . $tipo_pub["id"]; 
                       
        $conexion->query( $sql );

    }