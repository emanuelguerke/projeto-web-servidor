<?php
    session_start();
   
    if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
       header('Location: login.view.php');
      // require("../controller/login.controller.php");
    }
?>