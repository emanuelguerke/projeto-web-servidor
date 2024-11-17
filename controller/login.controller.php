<?php
class LoginController{
    public function login(){
        session_start();
        if(!empty($_SESSION['logado']) && $_SESSION['logado']) {
            header('Location: agenda.view.php');
        }else{
            require('view/login.view.php');
}
    }
}

