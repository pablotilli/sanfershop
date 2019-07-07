<div class="row mt-5">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          
          <a class="navbar-brand" href="#"><?= $nombre_modulo ?></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             
              <li class="nav-item">
                <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
                    <button onclick="mostrarEditor('nuevo');" id="btnNuevo" type="button" class="btn btn-primary">
                      Nuevo
                    </button>
          </li>
            </ul>

          </div>
        </nav>

        <?php include $contenido;?>
    </div>
</div>

    <!-- Modal -->
    <div id="editor-modal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
            <h5 class="modal-title" id="exampleModalLabel">
                <!--Titulo del editor-->
            </h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <?php include($form_edicion); ?>
          </div>

        </div>
      </div>
    </div>




    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script type="text/javascript">
        
        function mostrarEditor(modoEditor, id){
            
            if (modoEditor == 'nuevo'){
                <?php echo $contenido_editor_nuevo;?>
            }else{

                <?php echo $contenido_editor_modificacion;?>
            }

            $('#editor-modal').modal();

        };

    </script>
