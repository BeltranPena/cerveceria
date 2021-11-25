<?php


class typeModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=cerveceria;charset=utf8', 'root', '');
    }

    function insertType($tipo, $descripcion){
        $sentencia = $this->db->prepare("INSERT INTO tipo_cerveza(tipo,descripcion) VALUES(? , ?)");
        $sentencia->execute(array($tipo, $descripcion));
    }

    function deleteTypeFromDB($params){
        $sentencia = $this->db->prepare("DELETE FROM tipo_cerveza WHERE id_tipo = ?");
        $sentencia->execute(array($params));
    }



}