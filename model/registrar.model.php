<?php

    class Registrar{
        
        function registrar($nome, $email, $password, $sexo){
            session_start();
            $_SESSION['usuarios'][] = [
                'nome' => $nome,
                'email' => $email,
                'password' => $password,
                'sexo' => $sexo
            ];
            echo "Usuário cadastrado com sucesso!";
            header('Location: ../view/agenda.view.php');
        }
    }
  
    

    
    //require("../view/agenda.view.php'");
