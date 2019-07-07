<?php
    
    $nombre_modulo = "Categorias";

    include ('funciones_categorias.js.php');

    $contenido_editor_nuevo = "mostrarFormAlta();";

    $contenido_editor_modificacion = "mostrarFormModificar(id);";

    $form_edicion = PATH_VIEWS . "/admin/categorias_pub/partials/form_editor_categoria.inc.php";

    $contenido = PATH_VIEWS . "/admin/categorias_pub/partials/listado_categorias.inc.php";

    include ( PATH_VIEWS . '/admin/common/base_editor.inc.php');