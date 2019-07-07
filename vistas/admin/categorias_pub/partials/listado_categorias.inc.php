<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/categoriasDAO.php';

    $categorias = buscarCategorias();

    $campos = [ "cat_id" => "ID", "cat_descripcion" => "Descripción" ];

	echo getTablaHTML($categorias, $campos, "cat_id", "categorias_pub");
