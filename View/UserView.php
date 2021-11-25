<?php

require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView{

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showRegister($rol){
        $this->smarty->assign('rol', $rol);
        $this->smarty->display('templates/createUser.tpl');
    }

    function showLogin($rol){
        $this->smarty->assign('rol', $rol);
        $this->smarty->display('templates/login.tpl');
    }

    function showUsers($rol, $users){
        $this->smarty->assign('rol', $rol);
        $this->smarty->assign('usuarios', $users);
        $this->smarty->display('templates/userList.tpl');
    }
}