<?php

function crearHTMLCardPublicacion($titulo, $descripcion, $imagen){
?>	
		<div class="col-md-3 my-4">

			<a href=""><div class="card p-3">
				
				<img class="card-img-top mb-4" height="200" alt="" src="<?= FILES . '/imagenes/publicaciones/' . $imagen ?>">

				<div class="card-block">
					<h5 class="card-title">
						<?= $titulo ?>
					</h5>
					<p class="card-text">
						<?php echo '<pre>' . $descripcion . '</pre>' ?>
					</p>

					</div>
				</div>
			</a>
		</div>

<?php } ?>