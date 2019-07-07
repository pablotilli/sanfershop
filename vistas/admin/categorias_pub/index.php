<?php


    if ( isset($_REQUEST["a"]) )
    {
        switch( $_REQUEST["a"] ){

            case "add":

                include_once PATH_DAOS . '/categoriasDAO.php';

                $categoria["descripcion"] = $_REQUEST["descripcion"];

                agregarCategoria($categoria);

                header("Location: index.php?m=categorias_pub");

                break;

            case "edit":

                include_once PATH_DAOS . '/categoriasDAO.php';

                $categoria["id"] = $_REQUEST["id"];
                $categoria["descripcion"] = $_REQUEST["descripcion"];

                modificarCategoria($categoria);

                header("Location: index.php?m=categorias_pub");

                break;

            case "del":
                include_once PATH_DAOS . '/categoriasDAO.php';

                $categoria["id"] = $_REQUEST["id"];

                eliminarCategoria($categoria);

                header("Location: index.php?m=categorias_pub");

                break;


        }
    }


    $contenido_seccion2 = PATH_VIEWS . "/admin/categorias_pub/partials/contenido_categorias_pub.inc.php";

    include( PATH_VIEWS . '/admin/common/base.php' );