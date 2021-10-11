<?php

require_once "beerModel.php";
require_once "beerView.php";

class Controller{
	private $model;
	private $view;

	public function __Construct(){
		$this->model = new Model();
		$this->view = new View();
	}

	public function showHome(){
		$this->view->home();
		$allBeers = $this->model->getAllBeers();
		$this->view->renderAll($allBeers);
	}

	

	public function showBeerByID($params){
		//verificar datos obligatorios
		if (!isset($params) || empty($params)){
			$this->view->renderError();
			return;
		}

		//obtiene elementos por categoria del model
		$nombre = $this->model->getNombreCategoria($params);

		$beer = $this->model->getBeerByID($params);
		//muestra elementos en vista
		$this->view->renderBeerByID($nombre,$beer);
	}

}