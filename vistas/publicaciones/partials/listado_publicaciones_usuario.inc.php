<!--Listado de publicaciones -->

<div class="m-5 row ">					

<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/publicacionesDAO.php';

    $pubs = buscarPublicacionesUsuario( $_SESSION["id_usuario"] );

	if ($pubs){
		foreach ($pubs as $pub) {
		crearHTMLCardPublicacion($pub['pub_titulo'], $pub['pub_descripcion'] . "...", $pub['pub_imagen'], "$ " . $pub['pub_precio'], $pub['pub_id'], true);			   			
		}
    }	

?>

</div>


<!--FIN Listado de publicaciones -->
