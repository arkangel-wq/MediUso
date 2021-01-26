<?php

require_once "conexion.php";

class ModeloProductos{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlIngresarProductos($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_C,nombre_Q,medidas,stock,fecha_CD) VALUES (:nombre_C,:nombre_Q,:medidas,:stock,:fecha_CD)");

		$stmt->bindParam(":nombre_C", $datos["nombre_C"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_Q", $datos["nombre_Q"], PDO::PARAM_STR);
		$stmt->bindParam(":medidas", $datos["medidas"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_CD", $datos["fecha_CD"], PDO::PARAM_STR);
	
	
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	}
