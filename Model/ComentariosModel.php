<?php

    class comentariosModel{

        private $db;
        function __construct(){
             $this->db = new PDO('mysql:host=localhost;'.'dbname=cerveceria;charset=utf8', 'root', '');
        }

        function getAllComentarios($id_cerveza){
            $sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_cerveza = ?');
            $sentencia->execute(array($id_cerveza));
            $allComments = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $allComments;
        }

        function crearComentario($id_cerveza, $usuario, $comentario, $calificacion){
            $sentencia = $this->db->prepare('INSERT INTO usuarios(id_cerveza,usuario,comentario,calificacion) VALUES(?,?,?,?)');
            $sentencia->execute(array($id_cerveza, $usuario, $comentario, $calificacion));
        }

        function deleteComentario($id_comentario){
            $sentencia = $this->db->prepare('DELETE FROM usuarios WHERE id_comentario = ?');
            $sentencia->execute(array($id_comentario));
        }
    }