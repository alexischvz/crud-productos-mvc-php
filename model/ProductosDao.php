<?php 

class ProductosDao{

	public $cnx;

	public function __construct(){

		try {

			$this->cnx = Conexion::getConexion();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	// operacion CREATE
	public function createRegistroProducto($nombre, $id_categoria, $id_tipo, $precio, $descripcion, $id_existencia){

		try {

			$query = "INSERT INTO registro_productos(nombre,id_categoria,id_tipo,precio,descripcion,id_existencia) VALUES(:nombre, :id_categoria, :id_tipo, :precio, :descripcion, :id_existencia)";

			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":nombre", $nombre);
			$statement->bindParam(":id_categoria", $id_categoria);
			$statement->bindParam(":id_tipo", $id_tipo);
			$statement->bindParam(":precio", $precio);
			$statement->bindParam(":descripcion", $descripcion);
			$statement->bindParam(":id_existencia", $id_existencia);

			$statement->execute();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	// operacion READ
	public function readRegistroProducto(){

		try {

			$query = "SELECT r.id_registro, r.nombre, c.categoria, t.tipo, r.precio, r.descripcion, e.existencia FROM registro_productos r INNER JOIN categoria c ON c.id_categoria = r.id_categoria INNER JOIN tipo t ON t.id_tipo = r.id_tipo INNER JOIN existencia e ON e.id_existencia = r.id_existencia;";

			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	// operacion DELETE
	public function deleteRegistroProducto($id_registro){

		try {

			$query = "DELETE FROM registro_productos WHERE id_registro = :id_registro";

			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":id_registro", $id_registro);

			$statement->execute();
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function findById($id_registro){

		try {

			$query = "SELECT * FROM registro_productos WHERE id_registro = :id_registro";

			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":id_registro", $id_registro);

			$statement->execute();

			return $statement->fetch(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function updateRegistroProducto($nombre, $id_categoria, $id_tipo, $precio, $descripcion, $id_existencia, $id_registro){

		try {

			$query = "UPDATE registro_productos SET nombre = :nombre, id_categoria = :id_categoria, id_tipo = :id_tipo, precio = :precio, descripcion = :descripcion, id_existencia = :id_existencia WHERE id_registro = :id_registro";

			$statement = $this->cnx->prepare($query);
			$statement->bindParam(":nombre", $nombre);
			$statement->bindParam(":id_categoria", $id_categoria);
			$statement->bindParam(":id_tipo", $id_tipo);
			$statement->bindParam(":precio", $precio);
			$statement->bindParam(":descripcion", $descripcion);
			$statement->bindParam(":id_existencia", $id_existencia);
			$statement->bindParam(":id_registro", $id_registro);

			$statement->execute();

			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	// --------------------------------------------------------------------------------------
	
	public function readCategoria(){

		try {

			$query = "SELECT * FROM categoria";

			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function readTipo(){

		try {

			$query = "SELECT * FROM tipo";

			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

	public function readExistencia(){

		try {

			$query = "SELECT * FROM existencia";

			$statement = $this->cnx->prepare($query);
			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {

			die($e->getMessage());
			
		}

	}

}

 ?>