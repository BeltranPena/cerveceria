<?php

require_once "Model/beerModel.php";
require_once "View/beerView.php";

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

	public function createBeer(){
		$this->model->insertBeer($_POST['nombre'],$_POST['resumen'],$_POST['ibu'],$_POST['alcohol'],$_POST['id_tipo']);
		header("Location: ".BASE_URL."home");
	}

	public function deleteBeer($params){
		$this->model->deleteBeerFromDB($params);
		header("Location: ".BASE_URL."home");
	}

	public function updateBeer(){
		$this->model->updateBeerFromDB($_POST['id_cerveza'],$_POST['nombre'],$_POST['resumen'],$_POST['ibu'],$_POST['alcohol'],$_POST['id_tipo']);
		header("Location: ".BASE_URL."home");
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
		$this->view->renderBeerByID($nombreCat,$beer);
	}

	public function createUser(){
			$username = $_POST['usuario'];
			$password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
			echo $username;
			echo $password;
			$this->model->insertUser($username,$password);
			header("Location: ".BASE_URL);
	}

	//public function login(){
	//	if ((!empty($_POST['usuario']))&& (!empty($_POST['contraseña'])){
	//		$username = $_POST['usuario'];
	//		$password = $_POST['contraseña'];
	//		$user = $this->model->checkUser($password);
	//		if($user && password_verify($password, ($user->password)){

	//		}
	//	}
	//}


}