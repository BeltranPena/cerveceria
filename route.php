<?php

require_once("Controller/beerController.php");
require_once("View/beerView.php");


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if(!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new Controller();

switch($params[0]){
    case 'home':
        $controller->showHome();
        break;
    case 'tipos':
        $controller->showBeerByID($params[1]);
        break;
    case 'createBeer':
        $controller->createBeer();
        break;
    case 'deleteBeer':
        $controller->deleteBeer($params[1]);
        break;
    case 'updateBeer':
        $controller->updateBeer();
        break;
    case 'createUser':
        $controller->createUser();
        break;
    case 'login':
        //$controller->login();
        break;
    default:
        echo('404 Page not found');
        break;
}
