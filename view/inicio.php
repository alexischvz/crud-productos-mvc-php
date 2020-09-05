<!DOCTYPE html>
<html lang="es">

<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/icon/icon.css">
	<link rel="stylesheet" type="text/css" href="resources/css/alertify.css">
</head>

<body>

	<header>

		<div class="jumbotron rounded-0 bg-info">

			<h1 class="display-4 text-light">Marketplace Inc.</h1>
			<p class="lead text-light">Listado de productos de Marketplace Inc, a continuacion una tabla con el listado de productos de Marketplace Inc.</p>
			<hr class="my-4 bg-light">
			<p class="text-light">Para agregar un nuevo producto a la lista de datos dale click al enlace.</p>
			<a href="?c=registro" class="btn btn-outline-light btn-lg">Nuevo Producto</a>
			
		</div>
		
	</header>

	<section>

		<div class="row ml-4 mr-4 mt-5 mb-5 pt-5 pb-5">

			<table class="table table-secondary table-sm text-center table-hover">

				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Categoria</th>
						<th>Tipo</th>
						<th>Precio</th>
						<th>Descripcion</th>
						<th>Stock</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					
					<?php 
					foreach ($this->model->readRegistroProducto() as $rp) { ?>

						<tr>
							<td><?= $rp->id_registro ?></td>
							<td><?= $rp->nombre ?></td>
							<td><?= $rp->categoria ?></td>
							<td><?= $rp->tipo ?></td>
							<td><?= $rp->precio ?></td>
							<td><?= $rp->descripcion ?></td>
							<td><?= $rp->existencia ?></td>
							<td>
								<a href="#" onclick="del(<?= $rp->id_registro ?>);" class="btn btn-sm btn-outline-danger icon-bin"></a>
								<a href="?c=modificar&id_registro=<?= $rp->id_registro ?>" class="btn btn-sm btn-outline-info icon-pencil"></a>
							</td>
						</tr>
					 	
					<?php } ?>

				</tbody>
				
			</table>
			
		</div>
		
	</section>

	<footer>
		
	</footer>

	<script type="text/javascript" src="resources/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="resources/js/alertify.js"></script>
	<script type="text/javascript">
		
		function del(id_r){

			alertify.confirm('Cuidado', 'Está seguro de eliminar el registro del producto?', function(){ 

				window.location = "?c=delete&id_registro=" + id_r;
				 
			}, 
			function(){ 
				alertify.error('Operacion Cancelada')
			});

		}

	</script>

</body>

</html>