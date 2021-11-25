<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';


class beerView{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function home($allBeers, $rol){
        $this->smarty->assign('rol', $rol);
        $this->smarty->display('templates/header.tpl');
        $this->smarty->assign('beers', $allBeers);
        $this->smarty->display('templates/tabla.tpl');
    }

    function renderUpdate($params){
        $this->smarty->assign('id', $params);
        $this->smarty->display('templates/update.tpl');
    }

    function renderBeerInfo($beerInfo, $rol){
        $this->smarty->assign('rol', $rol);
        $this->smarty->assign('beer', $beerInfo);
        $this->smarty->display('templates/showInfo.tpl');
    }

	function renderBeerByID($nombre, $beer, $rol){
    
    if($nombre == !null){
            $this->smarty->assign('rol', $rol);
            $this->smarty->display('templates/header.tpl');
            $this->smarty->assign('titulo', $nombre);
            $this->smarty->display('templates/titulo.tpl');
            $this->smarty->assign('beers', $beer);
            $this->smarty->display('templates/tabla.tpl');
        }
        else{
            $this->smarty->display('templates/empty.tpl');
        }
	}
	function renderError(){
        $this->smarty->display('templates/wrongCat.tpl');
	}
}