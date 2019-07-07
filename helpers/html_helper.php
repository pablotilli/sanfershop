<?php

function crearHTMLCardPublicacion($titulo, $descripcion, $imagen, $precio){
?>	

  <div class="col-md-3 mb-4 text-center d-flex align-items-stretch"">

	<div class="card">
		<div class="card-title mb-5 p-4">
		  <?= $titulo ?>
	  	</div>

	    <img class="card-img-top"  alt=""  src="<?= FILES . '/imagenes/publicaciones/' . $imagen ?>">
	   
	    <div class="card-img-top card-body">

		</div>
	      
	      <div class="card-footer">
	    	  <?= $precio ?>
		  </div>

	</div>
  </div>


<?php 

}

function getTablaHTML( $registros, $campos, $primary_key, $nombre_modulo ){

  $tablaHTML = "<table class=\"table table-hover\">";

      $tablaHTML .= "<thead><tr>";

      foreach ($campos as $campo => $label){
        $tablaHTML .= "<th>$label</th>";
      }

      $tablaHTML .= "<th>Acciones</th></tr></thead>";

  while ( $registro = $registros->fetch_assoc() ){

    $tablaHTML .= '<tr id="' . $registro[$primary_key] . '">';

    foreach ($campos as $campo => $label){

      $tablaHTML .= '<td>' . $registro[ "$campo" ] . "</td>";

    }
    
    $tablaHTML .= "<td>";

    $tablaHTML .= "<button onclick=\"mostrarEditor('modificar', " . $registro[$primary_key]  . ");\" class=\"btn btn-success btn-sm\">Editar</button>";

    $tablaHTML .= "<a role=\"button\" class=\"btn btn-danger btn-sm ml-1  \" href='index.php?m=" . $nombre_modulo . "&a=del&id=" . $registro[$primary_key] . "'>Eliminar</a>";
  }

  $tablaHTML .= "</table>";

  return $tablaHTML;

}

function getOptionsComboCategorias($incluir_cat_todas = false){
  
    include_once(PATH_HELPERS . "/database_helper.php");
    include_once PATH_DAOS . '/categoriasDAO.php';

    $conexion = getConexion();

    $categorias = buscarCategorias();

    $opcionesCombo = "";

    if ($incluir_cat_todas){
        $opcionesCombo .= '<option value="-1">Todas</option>';
    }
    
    foreach ( $categorias as $categoria ){
        $opcionesCombo .= '<option value="'. $categoria["cat_id"] . '">' . $categoria["cat_descripcion"] . '</option>';
    }

    return $opcionesCombo;    

}