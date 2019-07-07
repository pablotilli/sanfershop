<?php
    
    $nombre_modulo = "Tipos de publicaciones";

    include ('funciones_tipos_pub.js.php');

    $contenido_editor_nuevo = "mostrarFormAlta();";

    $contenido_editor_modificacion = "mostrarFormModificar(id);";

    $form_edicion = PATH_VIEWS . "/admin/tipos_pub/partials/form_editor_tipos_pubs.inc.php";

    $contenido = PATH_VIEWS . "/admin/tipos_pub/partials/listado_tipos_pubs.inc.php";

    include ( PATH_VIEWS . '/admin/common/base_editor.inc.php');