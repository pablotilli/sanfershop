
			

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
										        
										        <option value="1" <?php if ( isset($_GET["orden"]) && $_GET["orden"] == 1){ ?> selected="selected" <?php } ?> >mayor precio</option>
										      </select>


												<div class="form-group my-2 ">
													<label class="mx-2" for="">Desde</label>
													<input name="precio_desde" id="precio_desde" class="form-control" type="text" value="<?php if( isset($_GET["precio_desde"]) ) { echo $_GET["precio_desde"]; } ?>" /> 
												</div>

												<div class="form-group my-2 mx-2">
													<label class="mx-2" for="">Hasta</label>
													<input name="precio_hasta" id="precio_hasta" class="form-control" type="text" value="<?php if( isset($_GET["precio_hasta"]) ) { echo $_GET["precio_hasta"]; } ?>" /> 
												</div>

												<button onclick="enviarBusqueda();" class="btn btn-primary  my-2 my-sm-0" type="button">
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

			
			<div class="m-5 row">				
				<?php

					include ($contenido_listado);

			    ?>
			</div>


			<!--FIN Listado de publicaciones -->