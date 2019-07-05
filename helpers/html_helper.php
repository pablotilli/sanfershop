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


<?php } ?>