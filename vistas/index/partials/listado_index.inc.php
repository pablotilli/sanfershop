<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/publicacionesDAO.php';

    $busqueda = "";

    if ( isset($_GET["buscar"]) ){
    	$busqueda = $_GET["buscar"];
    }

    $id_categoria = -1;

    if ( isset($_GET["categoria"]) ){
    	$id_categoria = $_GET["categoria"];
    }

    $pubs = buscarPublicaciones( $busqueda, $id_categoria );

	if ($pubs){
		foreach ($pubs as $pub) {
		crearHTMLCardPublicacion($pub['pub_titulo'], $pub['pub_descripcion'] . "...", $pub['pub_imagen'], "$" . $pub['pub_precio']);			   			
		}
    }	