<div class="row justify-content-center">
    <div class="col-md-4">

        <?php if ( isset($mensaje_form) ){?>

          <div class="alert alert-danger alert-dismissible fade show text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= $mensaje_form ?>
          </div>
          
        <?php } ?>

        <form method="POST" enctype="multipart/form-data" class="px-4">
          <div class="form-group">

            <input type="hidden" name="m" value="pubs">
            <input type="hidden" name="a" value="add">

            <label for="categoria">Categoría</label> 
            <div>
              <select id="categoria" name="categoria" aria-describedby="categoriaHelpBlock" required="required" class="custom-select">

                <?php
                  include_once( PATH_HELPERS . "/html_helper.php");

                  echo getOptionsComboCategorias(false);
                ?>

              </select> 
              <span id="categoriaHelpBlock" class="form-text text-muted">¿A que categoría pertenece lo que estas publicando?</span>
            </div>
          </div>
          <div class="form-group">
            <label for="titulo">Título</label> 
            <input id="titulo" name="titulo" type="text" aria-describedby="tituloHelpBlock" required="required" class="form-control"> 
            <span id="tituloHelpBlock" class="form-text text-muted">Titulo de la publicación</span>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripción</label> 
            <textarea id="descripcion" name="descripcion" cols="40" rows="4" aria-describedby="descripcionHelpBlock" required="required" class="form-control"></textarea> 
            <span id="descripcionHelpBlock" class="form-text text-muted">Describe detalladamente lo que estas publicando</span>
          </div>
          <div class="form-group">
            <label for="tipo_publicacion">Tipo</label> 
            <div>
              <select id="tipo_publicacion" name="tipo_publicacion" aria-describedby="tipo_publicacionHelpBlock" required="required" class="custom-select">

                <?php
                  include_once( PATH_HELPERS . "/html_helper.php");

                  echo getOptionsComboTiposPublicacion(false);
                ?>

              </select> 
              <span id="tipo_publicacionHelpBlock" class="form-text text-muted">Selecciona el tipo de publicación</span>
            </div>
          </div>
          <div class="form-group">
            <label for="imagen">Imagen</label> 
            <input id="imagen" name="imagen" type="file" class="form-control-file" required="required" class="form-control">
          </div> 

          <div class="form-group">
            <label for="titulo">Precio</label> 
            <input id="precio" name="precio" type="number" required="required" class="form-control"> 
            
          </div>
          
          <div class="form-group text-center pt-4">
            <button name="submit" type="submit" class="btn btn-primary">Publicar</button>
          </div>

        </form>

    </div>