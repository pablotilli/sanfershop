<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/tipos_pubsDAO.php';

    $tipos_pubs = buscarTiposPublicaciones();

    $campos = [ "tp_id" => "ID", "tp_descripcion" => "Descripción" ];

	echo getTablaHTML($tipos_pubs, $campos, "tp_id", "tipos_pubs");