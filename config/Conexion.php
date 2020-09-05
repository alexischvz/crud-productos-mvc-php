<?php 

class Conexion{

	public static function getConexion(){

		$user = "root";
		$pass = "";
		$host = "localhost";
		$dbname = "productos";

		$conexion = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	}

}

 ?>