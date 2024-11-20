<?php

    class Registrar{
        private $sql;
        private $nome;
        private $email;
        private $password;
        private $sexo;
        function registrar($nome, $email, $password, $sexo){
            //fazendo pela sessão
            session_start();
            $_SESSION['usuarios'][] = [
                'nome' => $nome,
                'email' => $email,
                'password' => $password,
                'sexo' => $sexo
            ];
            //fazendo pelo banco
            
            $conexao = new Conexao();
            $conexao->conexao();
            $bd = $conexao->bd;

            $sql = "INSERT INTO usuario (nome, email,senha,sexo) VALUES ('$nome', '$email', '$password', '$sexo')";
            $bd->query($sql);
            echo "Usuário cadastrado com sucesso!";
            header('Location: agenda');
        }
    }
  
    

    
    //require("../view/agenda.view.php'");
