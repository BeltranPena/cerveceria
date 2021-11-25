<?php



class beerModel{

	private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=cerveceria;charset=utf8', 'root', '');
    }


	function getBeerByID($id_tipo){
		$sentencia = $this->db->prepare('SELECT * FROM cerveza WHERE id_tipo = ?');
		$sentencia->execute([$id_tipo]);
		$beerByID = $sentencia->fetchAll(PDO::FETCH_OBJ);
		return $beerByID;
	}

	function getAllBeers(){
		$sentencia = $this->db->prepare('SELECT * FROM cerveza');
		$sentencia->execute();
		$allBeers = $sentencia->fetchAll(PDO::FETCH_OBJ);
		return $allBeers;
	}

	function insertBeer($nombre, $resumen, $ibu, $alcohol, $id_tipo){
        $sentencia = $this->db->prepare("INSERT INTO cerveza(nombre,resumen,ibu,alcohol,id_tipo) VALUES(?, ?, ?, ?, ?)");
        $sentencia->execute(array($nombre, $resumen, $ibu, $alcohol, $id_tipo));
    }

	function deleteBeerFromDB($params){
		$sentencia = $this->db->prepare("DELETE FROM cerveza WHERE id_cerveza = ?");
		$sentencia->execute(array($params));
	}

	function updateBeerFromDB($nombre, $resumen, $ibu, $alcohol, $id_tipo, $id){
		$sentencia = $this->db->prepare("UPDATE cerveza SET nombre=?, resumen=?, ibu=?, alcohol=?, id_tipo=? WHERE id_cerveza = ?");
		$sentencia->execute(array($nombre, $resumen, $ibu, $alcohol, $id_tipo, $id));
	}

	function getBeer($id_cerveza){
		$sentencia = $this->db->prepare('SELECT * FROM cerveza WHERE id_cerveza = ?');
		$sentencia->execute(array($id_cerveza));
		$beerInfo = $sentencia->fetch(PDO::FETCH_OBJ);
		return $beerInfo;
	}

	function getNombreCategoria($id_tipo){
		$sentencia = $this->db->prepare('SELECT tipo_cerveza.tipo,tipo_cerveza.descripcion FROM cerveza JOIN tipo_cerveza ON cerveza.id_tipo = tipo_cerveza.id_tipo WHERE tipo_cerveza.id_tipo = ?');
		$sentencia->execute(array($id_tipo));
		$nombreCat = $sentencia->fetch(PDO::FETCH_OBJ);
		return $nombreCat;
	}



}