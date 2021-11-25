<?php

    require_once './Model/BeerModel.php';
    require_once './View/ApiView.php';


    class ApiBeerController {

        private $model;
        private $view;
        
        public function __construct() {
            $this->model = new beerModel();
            $this->view = new ApiView();
            }


        public function obtenerCervezas(){
            $cervezas = $this->model->getAllBeers();
            return $this->view->response($cervezas, 200);
        }

        public function obtenerCerveza($params=null){
            $idCerveza = $params[':ID'];
            $cerveza = $this->model->getBeer($idCerveza);
            if($cerveza){
                return $this->view->response($cerveza, 200);
            }
            else{
                return $this->view->response(null, 404);
            }   
        }

        public function borrarCerveza($params=null){
            $idCerveza = $params[':ID'];
            $cerveza = $this->model->getBeer($idCerveza);
            if($cerveza){
                $this->model->deleteBeerFromDB($idCerveza);
                return $this->view->response("cerveza eliminada con exito", 200);
            }
            else{
                return $this->view->response("la cerveza no existe", 404);
            }
        }

        public function crearCerveza(){
            $body = $this->getBody();
            if(isset(($body->nombre)) && ($body->nombre != null) && isset(($body->resumen)) && ($body->resumen != null) && isset(($body->ibu)) && ($body->ibu != null) && isset(($body->alcohol)) && ($body->alcohol != null) && isset(($body->id_tipo)) && ($body->id_tipo != null)){
                $this->model->insertBeer($body->nombre, $body->resumen, $body->ibu, $body->alcohol, $body->id_tipo);
                return $this->view->response("la cerveza fue creada con exito", 200);
            }
            else{
                return $this->view->response("no se pudo crear por falta de datos", 400);
            }
        }

        private function getBody(){
            $bodyString = file_get_contents("php://input");
            return json_decode($bodyString, true);
        }

        public function actualizarCerveza($params = null){
            $idCerveza = $params[':ID'];
            $body = $this->getBody();

            if(isset(($body->nombre)) && ($body->nombre != null) && isset(($body->resumen)) && ($body->resumen != null) && isset(($body->ibu)) && ($body->ibu != null) && isset(($body->alcohol)) && ($body->alcohol != null) && isset(($body->id_tipo)) && ($body->id_tipo != null)){

                $cerveza = $this->model->getBeer($idCerveza);
                if($cerveza){
                    $this->model->updateBeerFromDB($body->nombre, $body->resumen, $body->ibu, $body->alcohol, $body->id_tipo, $idCerveza);
                    return $this->view->response("cerveza actualizada con exito", 200);
                }
                else{
                    return $this->view->response("la cerveza no existe", 404);
                }   
            }
        }
    }