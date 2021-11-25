<?php

require_once("Controller/beerController.php");
require_once("View/beerView.php");
require_once("Controller/typeController.php");
require_once("View/typeView.php");
require_once("Controller/userController.php");
require_once("View/userView.php");


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$beerController = new beerController();
$userController = new userController();
$typeController = new typeController();

switch($params[0]){
    case 'home':
        $beerController->showHome();
        break;
    case 'tipos':
        $beerController->showBeerByID($params[1]);
        break;
    case 'createBeer':
        $beerController->createBeer();
        break;
    case 'deleteBeer':
        $beerController->deleteBeer($params[1]);
        break;
    case 'updateBeer':
        $beerController->updateBeer($params[1]);
        break;
    case 'changeBeer':
        $beerController->changeBeer($params[1]);
        break;
    case 'beerInfo':
        $beerController->infoBeer($params[1]);
        break;
    case 'createType':
        $typeController->createType();
        break;
    case 'deleteType':
        $typeController->deleteType($params[1]);
        break;
    case 'register':
        $userController->register();
        break;
    case 'createUser':
        $userController->createUser();
        break;
    case 'login':
        $userController->login();
        break;
    case 'logout':
        $userController->logout();
    case 'verify':
        $userController->verifyLogin();
        break;
    case 'userList':
        $userController->userList();
        break;
    default:
        echo('404 Page not found');
        break;
}
