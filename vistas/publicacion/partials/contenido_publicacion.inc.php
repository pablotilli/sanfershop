<?php

include_once( PATH_DAOS . "/publicacionesDAO.php");

$registros = buscarPublicacion( $_REQUEST["id"] );

$publicacion = mysqli_fetch_assoc($registros);

?>

<div class="container-fluid">
    <div class="row px-5 mx-5">
        <div class="col-md-6 ">
            <img class="ml-5 img-fluid w-75 border border-warning" alt="" src="<?=FILES . "/imagenes/publicaciones/" . $publicacion["pub_imagen"]?>" />
            
            <p class="ml-5 img-fluid w-75 pt-5">
                <?=$publicacion["pub_descripcion"]?>
            </p>
        </div>
        <div class="col-md-6 ">
            <h2>
                <?=$publicacion["pub_titulo"]?>
            </h2>
            <p class="display-4">
                <?="$ " . $publicacion["pub_precio"]?>
            </p>

            <button type="button" class="btn btn-primary">
                Comprar
            </button>
        </div>
    </div>
</div>