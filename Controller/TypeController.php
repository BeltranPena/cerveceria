<?php

    require_once "Model/typeModel.php";
    require_once "View/typeView.php";

class typeController{

    private $typeModel;
	private $typeView;

	public function __Construct(){
		$this->typeModel = new typeModel();
		$this->typeView = new typeView();
	}


    public function createType(){
		$this->typeModel->insertType($_POST["tipo"], $_POST["descripcion"]);
		header("Location: ".BASE_URL."home");
	}

	public function deleteType($params){
		$this->typeModel->deleteTypeFromDB($params);
		header("Location: ".BASE_URL."home");
	}

}