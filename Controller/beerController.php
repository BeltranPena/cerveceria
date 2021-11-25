<?php

require_once "Model/beerModel.php";
require_once "View/beerView.php";
require_once "helpers/helper.php";

class beerController{
	private $model;
	private $view;
	private $helper;

	public function __Construct(){
		$this->model = new beerModel();
		$this->view = new beerView();
		$this->helper = new Helper();
	}

	public function showHome(){
		$rol = $this->helper->getRol();
		$allBeers = $this->model->getAllBeers();
		$this->view->home($allBeers, $rol);
	}

	public function createBeer(){
		if(isset($_POST['nombre']) && isset($_POST['resumen']) && isset($_POST['ibu']) && isset($_POST['alcohol']) && isset($_POST['id_tipo']) & isset($params)){
			$this->model->insertBeer($_POST['nombre'],$_POST['resumen'],$_POST['ibu'],$_POST['alcohol'],$_POST['id_tipo']);
		}
		header("Location: ".BASE_URL."home");
	}

	public function deleteBeer($params){
		if(isset($params)){
			$this->model->deleteBeerFromDB($params);
		}
		header("Location: ".BASE_URL."home");
	}

	public function updateBeer($params){
		$this->view->renderUpdate($params);
	}

	public function changeBeer($params){
		if(isset($_POST['nombre']) && isset($_POST['resumen']) && isset($_POST['ibu']) && isset($_POST['alcohol']) && isset($_POST['id_tipo']) & isset($params)){
			$this->model->updateBeerFromDB($_POST['nombre'],$_POST['resumen'],$_POST['ibu'],$_POST['alcohol'],$_POST['id_tipo'], $params);
		}
		header("Location: ".BASE_URL."home");
	}

	public function infoBeer($params){
		$beerInfo = $this->model->getBeer($params);
		$rol = $this->helper->getRol();
		$this->view->renderBeerInfo($beerInfo, $rol);
	}

	public function showBeerByID($params){
		//verificar datos obligatorios
		if (!isset($params) || empty($params)){
			$this->view->renderError();
			return;
		}

		//obtiene elementos por categoria del model
		$nombreCat = $this->model->getNombreCategoria($params);

		$beer = $this->model->getBeerByID($params);
		//muestra elementos en vista
		$rol = $this->helper->getRol();
		$this->view->renderBeerByID($nombreCat,$beer, $rol);
	}
}