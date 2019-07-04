<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SanFer Shop</title>

    <meta name="description" content="Sitio lider en venta online">
    <meta name="author" content="Curso PHP SF 2019">

    <link href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?= PATH_CSS ?>/estilo.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid p-0">

    	<header>
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						 
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="navbar-toggler-icon"></span>
						</button> <a class="navbar-brand" href="#">SanFer SHOP</a>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="navbar-nav ml-md-auto">
								

								<?php 
								if ( !isset($_SESSION["usuario"]) ){ ?>
									<li class="nav-item">
										 <a class="nav-link" href="#">Creá tu cuenta</a>
									</li>

									<li class="nav-item">
										 <a data-toggle="modal" data-target="#exampleModal" class="nav-link" href="#">Ingresá</a>
									</li>
								<?php 
								}
								else{
								?>
									<li class="nav-item dropdown">
										 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario"] ?></a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
											 <a class="dropdown-item" href="#">Cuenta</a>
											 
											 <a class="dropdown-item" href="index.php?m=logout">Salir</a>
										</div>
									</li>
								<?php 
								}
								?> 
							</ul>

						</div>
					</nav>
					
				</div>
			</div>


			<div class="row mt-2 pb-4">
				
				<div class="col-12">

					<form class="col-md-7 mx-auto">
					  <div class="form-row justify-content-center">

						<div class="cols-xs-12 col-md-3 my-2">
					      <select id="categoria" name="categoria" class="custom-select">
					      	<option value="-1">Todas</option>
					        <option value="0">Computación</option>
					        <option value="1">Electrodomesticos</option>
					        <option value="2">Muebles</option>
					        <option value="3">Vehiculos</option>
					        <option value="4">Indumentaria</option>
					      </select>
						</div>

						<div class="cols-xs-12 col-md-7 my-2">
					      <input id="buscar" name="buscar" placeholder="Buscar" type="text" class="form-control">
						</div>

						<div class="my-2">
					      <button name="submit" type="submit" class="btn btn-primary">Buscar</button>
						</div>
						
					  </div>

					</form>

				</div>
			</div>
		</header>

		<?php if ( isset($mensaje_alerta) ){?>

		  <div class="alert alert-danger alert-dismissible fade show text-center">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		    <?= $mensaje_alerta ?>
		  </div>
			
		</div>

		<?php } ?>

	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-732363">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-732363">
					</li>
					<li data-slide-to="1" data-target="#carousel-732363" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-732363">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item"> 
						<img class="d-block w-100" height="300px" alt="Carousel Bootstrap First" src="<?= PATH_IMAGENES ?>/publicidades/pub2.jpg">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" height="300px" alt="Carousel Bootstrap Second" src="<?= PATH_IMAGENES ?>/publicidades/pub1.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" height="300px" alt="Carousel Bootstrap Third" src="<?= PATH_IMAGENES ?>/publicidades/pub3.jpg">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-732363" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-732363" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">

			<nav class="mt-4">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Library</a>
					</li>
					<li class="breadcrumb-item active">
						Data
					</li>
				</ol>
			</nav>

			<?php include( $contenido ); ?>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ingresar a SanFer SHOP</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

			<div class="row justify-content-center">
				<div class="col-md-8">
					<form role="form" method="POST">

						<input type="hidden" name="m" value="login">

						<div class="form-group">
							 
							<label for="user_name">Nombre de usuario</label>

							<input type="text" class="form-control" name="user_name" id="user_name" />
						</div>

						<div class="form-group">
							 
							<label for="password">Contraseña</label>

							<input type="password" class="form-control" name="password" id="password" />
						</div>

						<button type="submit" class="btn btn-primary">
							Ingresar
						</button>

					</form>
				</div>
			</div>

	      </div>
	      
	    </div>
	  </div>
	</div>

</div>

    <script src="<?= PATH_VENDOR ?>/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>