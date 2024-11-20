<?php
    class VerificaLogado{
      public function verificalogado(){
        if(!isset($_SESSION)) 
        { 
          session_start(); 
        } 
        if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
           header('Location: login');
        }
      }
    }
 