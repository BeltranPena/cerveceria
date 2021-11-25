<?php


require_once "Model/userModel.php";
require_once "View/userView.php";
require_once "helpers/helper.php";

class userController{

    private $model;
	private $view;
    private $helper;

	public function __Construct(){
		$this->model = new userModel();
		$this->view = new userView();
        $this->helper = new Helper();
	}

    public function register(){
        if($this->helper->isLogged()){
            header("Location: ".BASE_URL);
        }
        else{
            $rol = $this->helper->getRol();
            $this->view->showRegister($rol);
        }
    }

    function createUser(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = $_POST['usuario'];
            $email = $_POST['email'];
            $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $acceso = 1;
            $this->model->insertUser($username,$email,$password, $acceso);
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['acceso'] = $acceso;
            header("Location: ".BASE_URL);
        }
    }

    function userList(){
            $userList = $this->model->getAllUsers();
            $rol = $this->helper->getRol();
            if($rol == 2){
                $this->view->showUsers($rol, $userList);
            }
            else{
                header("Location: ".BASE_URL);
            }
    }

    public function login(){
        if($this->helper->isLogged()){
            header("Location: ".BASE_URL);
        }
        else{
            $rol = $this->helper->getRol();
            $this->view->showLogin($rol);
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL);
    }

    function verifyLogin(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['usuario'], $_POST['email'], $_POST['contraseña'])){
                $username = $_POST['usuario'];
                $email = $_POST['email'];
                $userpass = $_POST['contraseña'];
                $user = $this->model->checkUser($email);
                if($user && password_verify($userpass, $user->contraseña)){
                    session_start();
                    $_SESSION['usuario'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['acceso'] = $user->acceso;
                    header("Location: ".BASE_URL);
                }
                else{ echo "contraseña incorrecta";}
            }
        }
    }

    public function deleteUser($params){
		if(isset($params)){
			$this->model->deleteUSerFromDB($params);
		}
		header("Location: ".BASE_URL."home");
	}

    public function upgradeAccess($params){
        if(isset($params)){
            $this->model->upgradeAccess($params);
        }
    }

    public function downgradeAccess($params){
        if(isset($params)){
            $this->model->downgradeAccess($params);
        }
    }
}