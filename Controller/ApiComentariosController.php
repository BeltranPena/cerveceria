<?php

    require_once './Model/ComentariosModel.php';
    require_once './View/ApiView.php';


    class ApiBeerController {

        private $model;
        private $view;
        
        public function __construct() {
            $this->model = new comentariosModel();
            $this->view = new ApiView();
            }
        

        public function obtenerComentarios($params = null){
            $id_cerveza = $params[':ID'];
            $comentarios = $this->model->getAllComentarios($id_cerveza);
            return $this->view->response($comentarios, 200);
        }
        
        public function crearComentario($params = null){
            $id_cerveza = $params[':ID'];
            $body = $this->getBody();
            $usuario = $body->usuario;
            $comentario = $body->comentario;
            $calificacion = $body->calificacion;
            $this->model->crearComentario($id_cerveza, $usuario, $comentario, $calificacion);
        }
        
        public function borrarComentario($params = null){
            $id_comentario = $params[':ID_comentario'];
            $this->model->deleteComentario($id_comentario);
        }
        
        private function getBody(){
            $bodyString = file_get_contents("php://input");
            return json_decode($bodyString);
        }
    }