<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiBeerController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('cervezas'                , 'GET'   , 'ApiBeerController'       , 'obtenerCervezas');
$router->addRoute('cervezas/:ID'            , 'GET'   , 'ApiBeerController'       , 'obtenerCerveza');
$router->addRoute('cervezas'                , 'POST'  , 'ApiBeerController'       , 'crearCerveza');
$router->addRoute('cervezas/:ID'            , 'DELETE', 'ApiBeerController'       , 'borrarCerveza');
$router->addRoute('cervezas/:ID'            , 'PUT'   , 'ApiBeerController'       , 'actualizarCerveza');
$router->addRoute('comentarios', 'GET'   , 'ApiComentariosController', 'obtenerComentarios');
$router->addRoute('comentarios', 'POST'  , 'ApiComentariosController', 'crearComentario');
$router->addRoute('comentarios/:ID_comentario', 'DELETE', 'ApiComentariosController', 'borrarComentario');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
