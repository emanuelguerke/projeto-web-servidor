<?php
class LoginController{
    public function login(){
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        if(!empty($_SESSION['logado']) && $_SESSION['logado']) {
            header('Location: agenda.view.php');
        }else{
            require('view/login.view.php');
}
    }
}

