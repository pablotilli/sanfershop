<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarCategorias(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM categorias " .
                    "ORDER BY cat_descripcion";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarCategoria( $categoria ){

        $conexion = getConexion();

        $sql = "INSERT INTO categorias " . 
                    "(cat_descripcion)" 
                        . " VALUES ('" 
                        . $categoria["descripcion"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarCategoria( $categoria ){

        $conexion = getConexion();

        $sql = "UPDATE categorias " . 
                "SET cat_descripcion = '" . $categoria["descripcion"] .
                "' WHERE cat_id = " . $categoria["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarCategoria( $categoria ){

        $conexion = getConexion();

        $sql = "DELETE FROM categorias " . 
                " WHERE cat_id = " . $categoria["id"]; 
                       
        $conexion->query( $sql );

    }