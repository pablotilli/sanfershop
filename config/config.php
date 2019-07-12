<?php

    define('SITE_FOLDER', 'sanfershop');

    define('ROOT_URL', strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'] . "/" . SITE_FOLDER);

    define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . "/" . SITE_FOLDER) ;



    define("PATH_VIEWS", SITE_ROOT . "/vistas");

    define("PATH_HELPERS", SITE_ROOT . "/helpers");

    define("PATH_DAOS", SITE_ROOT . "/modelo/DAOs");

    define("UPLOAD_PUB_IMAGE_PATH", SITE_ROOT . "/files/imagenes/publicaciones");

    define("FILES", ROOT_URL . "/files");
    
    define("PATH_CSS", ROOT_URL . "/css");

    define("PATH_RECURSOS", ROOT_URL . "/recursos");

    define("PATH_IMAGENES", ROOT_URL . "/recursos/images");

    define("PATH_FONTS", ROOT_URL . "/fonts");

    define("PATH_VENDOR", ROOT_URL . "/vendor");


