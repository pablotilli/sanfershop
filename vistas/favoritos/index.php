<?php

	include_once PATH_DAOS . '/favoritosDAO.php';
	include_once PATH_DAOS . '/publicacionesDAO.php';

	if ( isset($_SESSION["id_usuario"]) ){
		switch ( $_GET["a"] ){
			
			case "add":
				agregarFavorito( $_GET["id"], $_SESSION["id_usuario"]);
				
				$only_favs = "";

				if ( isset($_GET["only_favs"]))  {
					$only_favs = "?only_favs";
				}

				header("Location: index.php" . $only_favs);	
				
				break;

			case "del":
				eliminarFavorito( $_GET["id"], $_SESSION["id_usuario"]);

				$only_favs = "";

				if ( isset($_GET["only_favs" ])) {
					$only_favs = "?only_favs";
				}

				header("Location: index.php" . $only_favs);

				break;

		}


	}
	else{
		

		header("Location: index.php?s=" . urlencode('Para guardar favoritos debe iniciar sesión.<a data-toggle="modal" data-target="#exampleModal" class="btn btn-success ml-3" href="#">Ingresá</a>') . "&t=danger" );
	}