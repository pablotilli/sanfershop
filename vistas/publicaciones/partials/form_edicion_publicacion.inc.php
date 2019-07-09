<div class="row justify-content-center">
    <div class="col-md-4">

        <?php if ( isset($mensaje_form) ){?>

          <div class="alert alert-danger alert-dismissible fade show text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= $mensaje_form ?>
          </div>
          
        <?php } ?>

        <form action="index.php" method="POST" enctype="multipart/form-data" class="px-4">
          <div class="form-group">

            <input type="hidden" name="m" value="pubs">

          
            <?php
              $action = "new";

              if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'new' ){
                $action = "add";
              }
            
              if ( isset($_REQUEST["a"]) && $_REQUEST["a"] == 'edit' ) {
                //Obtengo info de la publicacion

                include_once( PATH_DAOS . "/publicacionesDAO.php");

                $registros = buscarPublicacion($_REQUEST["id"]);

                $publicacion = mysqli_fetch_assoc($registros);

                $action = "update";

                echo '<input type="hidden" name="id" value="' . $_REQUEST["id"] . '">';

              }
            
            ?>

            <input type="hidden" name="a" value="<?= $action?>">

            <label for="categoria">Categoría</label> 
            <div>
              <select id="categoria" name="categoria" aria-describedby="categoriaHelpBlock" required="required" class="custom-select">

                <?php
                  include_once( PATH_HELPERS . "/html_helper.php");

                  echo getOptionsComboCategorias(false, $publicacion["pub_id_categoria"]);
                ?>

              </select> 
              <span id="categoriaHelpBlock" class="form-text text-muted">¿A que categoría pertenece lo que estas publicando?</span>
            </div>
          </div>
          <div class="form-group">
            <label for="titulo">Título</label> 

            <input id="titulo" name="titulo" type="text" aria-describedby="tituloHelpBlock" required="required" class="form-control" value="<?=isset($publicacion["pub_titulo"])?$publicacion["pub_titulo"]:'';?>"> 

            <span id="tituloHelpBlock" class="form-text text-muted">Titulo de la publicación</span>
          </div>
          
          <div class="form-group">
            <label for="descripcion">Descripción</label> 
            
            <textarea id="descripcion" name="descripcion" cols="40" rows="4" aria-describedby="descripcionHelpBlock" required="required" class="form-control"><?= isset($publicacion["pub_descripcion"])? $publicacion["pub_descripcion"] : ''; ?></textarea> 

            <span id="descripcionHelpBlock" class="form-text text-muted">Describe detalladamente lo que estas publicando</span>
          </div>

          <div class="form-group">
            <label for="tipo_publicacion">Tipo</label> 
            <div>
              <select id="tipo_publicacion" name="tipo_publicacion" aria-describedby="tipo_publicacionHelpBlock" required="required" class="custom-select">

                <?php
                  include_once( PATH_HELPERS . "/html_helper.php");

                  echo getOptionsComboTiposPublicacion(false, $publicacion["pub_id_tipo_publicacion"]);
                ?>

              </select> 


              <span id="tipo_publicacionHelpBlock" class="form-text text-muted">Selecciona el tipo de publicación</span>
            </div>
          </div>
          <div class="form-group">
            <label for="imagen">Imagen</label> 

            <img class="card-img-top mb-2"  alt=""  src="<?= FILES . '/imagenes/publicaciones/' . $publicacion["pub_imagen"] ?>">

            <input id="imagen" name="imagen" type="file" class="form-control-file" 

            <?php if($action == 'add') { ?>
              required="required" class="form-control">
            <?php } ?>
          </div> 

          <div class="form-group">
            <label for="titulo">Precio</label> 
            <input id="precio" name="precio" type="number" required="required" class="form-control" value="<?=isset($publicacion["pub_precio"])?$publicacion["pub_precio"]:'';?>"> 
            
          </div>
          
          <div class="form-group text-center pt-4">
            <button name="submit" type="submit" class="btn btn-primary">Publicar</button>
          </div>

        </form>

    </div>