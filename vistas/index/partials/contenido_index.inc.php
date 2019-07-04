			<!--Barra de filtros de busqueda-->

			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light ">
						 
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="navbar-toggler-icon"></span>
						</button> 
						<div class="collapse navbar-collapse justify-content-center" id="bs-example-navbar-collapse-1">
							<ul class="navbar-nav">
								<li class="nav-item ">
									 
									  	<form class="form-inline">
											
									  		<div class="form-group my-2 col-sm-12">
												<label class=" mx-2"  for="orden">Ordenar por:</label>

										      <select id="orden" name="orden" class="custom-select">
										        <option value="0">menor precio</option>
										        <option value="1">mayor precio</option>
										      </select>


												<div class="form-group my-2 ">
													<label class="mx-2" for="">Desde</label>
													<input name="precio_desde" id="precio_desde" class="form-control" type="text" /> 
												</div>

												<div class="form-group my-2 mx-2">
													<label class="mx-2" for="">Hasta</label>
													<input name="precio_hasta" id="precio_hasta" class="form-control" type="text" /> 
												</div>

												<button class="btn btn-primary  my-2 my-sm-0" type="submit">
													Filtrar
												</button>
											</div>
										</form>

									
								</li>
								
							</ul>

							
						</div>
					</nav>
				</div>
			</div>

			<!--FIN Barra de filtros de busqueda-->

			<!--Listado de publicaciones -->

			<div class="row m-5">
				
				<?php
			   
			   		include PATH_HELPERS . '/html_helper.php';

			   		include PATH_DAOS . '/publicacionesDAO.php';
			    
			    	$busqueda = "";

			    	if ( isset($_GET["buscar"]) ){
			    		$busqueda = $_GET["buscar"];
			    	}

			    	$id_categoria = -1;

			    	if ( isset($_GET["categoria"]) ){
			    		$id_categoria = $_GET["categoria"];
			    	}

			   		$pubs = buscarPublicaciones( $busqueda, $id_categoria );

			   		if ($pubs){
				   		foreach ($pubs as $pub) {
				    		crearHTMLCardPublicacion($pub['pub_titulo'], $pub['pub_descripcion'] . "...", $pub['pub_imagen']);			   			
				   		}
					}					

			    ?>



			</div>

			<!--FIN Listado de publicaciones -->