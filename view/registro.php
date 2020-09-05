<!DOCTYPE html>
<html lang="es">

<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
</head>

<body>

	<header>

		<div class="jumbotron rounded-0 bg-success">

			<h1 class="display-4 text-light">Marketplace Inc.</h1>
			<p class="lead text-light">Registro de productos de Marketplace Inc, a continuacion un formulario con los datos del producto a registrar.</p>
			<hr class="my-4 bg-light">
			<p class="text-light">Para ver la lista de productos dale click al enlace.</p>
			<a href="?c=index" class="btn btn-outline-light btn-lg">Ver Productos</a>
			
		</div>
		
	</header>

	<section>

		<div class="container mt-5 mb-5 pt-5 pb-5">

			<div class="row mb-3">

				<p class="lead text-center w-100">Rellene todos los campos</p>
				
			</div>

			<form action="?c=create" method="POST">

				<div class="row">
					
					<div class="form-group col-6">

						<label>Nombre del Producto</label>
						<input type="text" name="nombre" class="form-control form-control-sm">
									
					</div>

					<div class="form-group col-3">

						<label>Categoria</label>
						<select name="categoria" class="custom-select custom-select-sm">
							<option>Seleccione...</option>

							<?php 
							foreach ($this->model->readCategoria() as $rc) { ?>

								<option value="<?= $rc->id_categoria ?>">

									<?= $rc->categoria ?>
									
								</option>
							 	
							<?php } ?>

						</select>
						
					</div>

					<div class="form-group col-3">

						<label>Tipo</label>
						<select name="tipo" class="custom-select custom-select-sm">
							<option>Seleccione...</option>

							<?php 
							foreach ($this->model->readTipo() as $rt) { ?>

								<option value="<?= $rt->id_tipo ?>">

									<?= $rt->tipo ?>
									
								</option>
							 	
							<?php } ?>

						</select>
						
					</div>

				</div>

				<div class="row">
					
					<div class="form-group col-3">

						<label>Precio</label>

						<div class="input-group input-group-sm">

							<div class="input-group-prepend">
								<span class="input-group-text">$.</span>
							</div>
							<input type="text" name="precio" class="form-control form-control-sm">
							
						</div>
						
					</div>

					<div class="form-group col-6">

						<label>Descripcion</label>
						<input type="text" name="descripcion" class="form-control form-control-sm">
						
					</div>

					<div class="form-group col-3">

						<label>Stock</label>
						<select name="existencia" class="custom-select custom-select-sm">
							<option>Seleccione...</option>

							<?php 
							foreach ($this->model->readExistencia() as $re) { ?>

								<option value="<?= $re->id_existencia ?>">

									<?= $re->existencia ?>
									
								</option>
							 	
							<?php } ?>

						</select>
						
					</div>

				</div>

				<hr class="my-3 bg-light">

				<div class="row">

					<div class="btn-group ml-3">
						
						<input type="submit" value="Registrar Producto" class="btn btn-sm btn-success">
						<a href="?c=index" class="btn btn-danger btn-sm">Cancelar</a>

					</div>
					
				</div>

					
			</form>
			
		</div>
		
	</section>

	<footer>
		
	</footer>

</body>

</html>