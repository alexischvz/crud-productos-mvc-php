<?php 

include_once 'model/ProductosDao.php';

class Control{

	public $model;

	public function __construct(){

		$this->model = new ProductosDao();

	}

	public function index(){

		include_once 'view/inicio.php';

	}

	public function registro(){

		include_once 'view/registro.php';

	}

	public function create(){

		$nombre = $_POST['nombre'];
		$categoria = $_POST['categoria'];
		$tipo = $_POST['tipo'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['descripcion'];
		$existencia = $_POST['existencia'];

		$this->model->createRegistroProducto($nombre, $categoria, $tipo, $precio, $descripcion, $existencia);

		header('Location: index.php');

	}

	public function delete(){

		$id_registro = $_GET['id_registro'];

		$this->model->deleteRegistroProducto($id_registro);

		header('Location: index.php');

	}

	public function modificar(){

		$id_registro = $_GET['id_registro'];

		if (isset($id_registro)) {
			$fila = $this->model->findById($id_registro);
		}

		include_once 'view/modificar.php';

	}

	public function update(){

		$id_registro = $_POST['id_registro'];
		$nombre = $_POST['nombre'];
		$categoria = $_POST['categoria'];
		$tipo = $_POST['tipo'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['descripcion'];
		$existencia = $_POST['existencia'];

		$this->model->updateRegistroProducto($nombre, $categoria, $tipo, $precio, $descripcion, $existencia, $id_registro);

		header('Location: index.php');

	}

}

 ?>