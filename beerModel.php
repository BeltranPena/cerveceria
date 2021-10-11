<?php



class Model{

	private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=cerveceria;charset=utf8', 'root', '');
    }


	function getBeerByID($id_tipo){
		$query = $this->db->prepare('SELECT * FROM cerveza WHERE id_tipo = ?');
		$query->execute([$id_tipo]);
		$beerByID = $query->fetchAll(PDO::FETCH_OBJ);
		return $beerByID;
	}

	function getAllBeers(){
		$query = $this->db->prepare('SELECT * FROM cerveza');
		$query->execute();
		$allBeers = $query->fetchAll(PDO::FETCH_OBJ);
		return $allBeers;
	}

	function getNombreCategoria($id_tipo){
		$sentencia = $this->db->prepare('SELECT tipo_cerveza.tipo,tipo_cerveza.descripcion FROM cerveza JOIN tipo_cerveza ON cerveza.id_tipo = tipo_cerveza.id_tipo WHERE tipo_cerveza.id_tipo = ?');
		$sentencia->execute(array($id_tipo));
		$nombre = $sentencia->fetch(PDO::FETCH_OBJ);
		return $nombre;
	}
}