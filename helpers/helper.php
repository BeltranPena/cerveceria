<?php

    class Helper{

        function __construct(){

        }

        public function getRol(){
            session_start();
            if(isset($_SESSION['acceso'])){
                $rol = $_SESSION['acceso'];
                session_abort();
            }
                else{
                    $rol = 0;
                    session_abort();
                }
            return $rol;
        }
    
        public function isLogged() {
            session_start();
            if ( isset($_SESSION['usuario'])){
                session_abort(); 
                return true;
            }
                else {  
                    session_abort();
                    return false;
                }
        }
    }