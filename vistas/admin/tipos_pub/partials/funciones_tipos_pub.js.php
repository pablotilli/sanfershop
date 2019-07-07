<script>
    var modoEditor;

    function mostrarFormAlta(){
        modoEditor = 'alta';

        $('#a').val("add");
        $('#id').val("");
        $('#descripcion').val("");

        $('.modal-title').text("Nuevo tipo de publicación");
    }

    function mostrarFormModificar(id){
        modoEditor = 'modificar';

        $('#a').val("edit");
        $('#id').val(id);
        $('#descripcion').val( ($("#"+id+" td" )[1]).innerHTML );

        
        $('.modal-title').text("Modificar tipo de publicación");
    }

    function guardar(){

        var parametros = {
                             id: $("#id").val(),
                             dni: $("#dni").val(),
                             nombre:  $("#nombre").val(),
                             accion: modoEditor
                         };

        var jqxhr = $.post( "DAO/clientes_dao.php", parametros)

            .done(
                function( data ) {
                    alert( data );
                    $('#editor-modal').modal('hide');
                })

            .fail(function() {
                    alert( data );
            });
        }

</script>