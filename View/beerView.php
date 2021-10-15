<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';


class View{

    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function home(){

        $this->smarty->display('templates/header.tpl');
        $this->smarty->display('templates/create&login.tpl');
        $this->smarty->display('templates/addUpdate.tpl');
    }


    function renderAll($allBeers){
	    
        $this->smarty->assign('beers', $allBeers);
        $this->smarty->display('templates/tabla.tpl');

	}

	function renderBeerByID($nombre, $beer){
    
    if($nombre == !null){
            
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