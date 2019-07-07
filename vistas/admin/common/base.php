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
						 
						<?php 
							if ( isset($_SESSION["usuario_admin"]) ){
						?>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="navbar-toggler-icon"></span>
							</button>

						<?php
						}
						?>
						

						 <a class="navbar-brand" href="index.php">SanFer SHOP</a>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="navbar-nav ml-md-auto">
								
								<?php 
								if ( isset($_SESSION["usuario_admin"]) ){
								?>
									
									<li class="nav-item dropdown">
										 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario_admin"] ?></a>
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

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Administración</a>
			  
				<?php 
				if ( isset($_SESSION["usuario_admin"]) ){
				?>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
					      
					      <li class="nav-item dropdown">

					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Tablas del sistema
					        </a>

					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="index.php?m=categorias_pub">Categorias de publicaciones</a>
					          <a class="dropdown-item" href="index.php?m=tipos_pubs">Tipos de publicaciones</a>
					        </div>

					      </li>

					    </ul>

					  </div>
				<?php
					}
				?>
			</nav>


		</header>


		
		<?php 

			$tipo_alerta = "danger";

			if ( isset($_GET["s"] ) ){
				$mensaje_alerta = $_GET["s"];
				$tipo_alerta = $_GET["t"]; //Tipo de alerta

			}


			if ( isset($mensaje_alerta) ){?>

		  <div class="alert alert-<?=$tipo_alerta?> alert-dismissible fade show text-center">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		    <?= $mensaje_alerta ?>
		  </div>
			
		</div>

		<?php 

			}

		?>

	<div class="row">

		<div class="col-md-12">

			<?php if(isset($contenido_seccion1)){include( $contenido_seccion1 );} ?>


			<?php if(isset($contenido_seccion2)){include( $contenido_seccion2 );} ?>

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