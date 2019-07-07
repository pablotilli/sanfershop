<?php



    if ( isset($_REQUEST["a"]) )
    {
        switch( $_REQUEST["a"] ){

            case "add":

                include_once PATH_DAOS . '/tipos_pubsDAO.php';

                $tipo_pub["descripcion"] = $_REQUEST["descripcion"];

                agregarTipoPublicacion($tipo_pub);

                header("Location: index.php?m=tipos_pubs");

                break;

            case "edit":

                include_once PATH_DAOS . '/tipos_pubsDAO.php';

                $tipo_pub["id"] = $_REQUEST["id"];
                $tipo_pub["descripcion"] = $_REQUEST["descripcion"];

                modificarTipoPublicacion($tipo_pub);

                header("Location: index.php?m=tipos_pubs");

                break;

            case "del":
                include_once PATH_DAOS . '/tipos_pubsDAO.php';

                $tipo_pub["id"] = $_REQUEST["id"];

                eliminarTipoPublicacion($tipo_pub);

                header("Location: index.php?m=tipos_pubs");

                break;


        }
    }


    $contenido_seccion2 = PATH_VIEWS . "/admin/tipos_pub/partials/contenido_tipos_pub.inc.php";

    include( PATH_VIEWS . '/admin/common/base.php' );