<?php
    if(!isset($_SESSION)) 
    { 
      session_start(); 
    } 
    if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
       header('Location: login');
      //require("controller/login.controller.php");
    }
?>