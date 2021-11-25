<?php

class userModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=cerveceria;charset=utf8', 'root', '');
    }

    function insertUser($username,$email, $password, $acceso){
		$sentencia = $this->db->prepare("INSERT INTO usuarios(usuario, email, contraseña, acceso) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($username,$email, $password, $acceso));
	}

	function checkUser($email){
		$sentencia = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
		$sentencia->execute([$email]);
		$user = $sentencia->fetch(PDO::FETCH_OBJ);
		return $user;
	}

	function getAllUsers(){
		$sentencia = $this->db->prepare('SELECT * FROM usuarios');
		$sentencia->execute();
		$users = $sentencia->fetchAll(PDO::FETCH_OBJ);
		return $users;
	}

	function deleteUserFromDB($params){
		$sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
		$sentencia->execute(array($params));
	}

	function upgradeAccess($params){
		$sentencia = $this->db->prepare("UPDATE usuarios SET acceso = 2 WHERE id_usuario = ?");
		$sentencia->execute(array($params));
	}

	function downgradeAccess($params){
		$sentencia = $this->db->prepare("UPDATE usuarios SET acceso = 1 WHERE id_usuario = ?");
		$sentencia->execute(array($params));
	}
}