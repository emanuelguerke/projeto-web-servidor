<?php
      $nome = $_POST['nome'] ?? '';
      $email = $_POST['email'] ?? '';
      //password hash pra ser utilizado com o password verify
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ??'';
      $sexo = $_POST['sexo'] ??'';

      if($password == '' || $email == '' || $sexo == '' || $nome == '') {
        //  header('Location: index.view.php?acao=erro-campos');
            header('Location: index.view.php?acao=erro-campos-cadastro');
        
       }else{
            require("../conexao.php");
            $sql = "SELECT id FROM usuario WHERE email = '$email'"; 
            $result = $bd->query($sql);
            if($result->num_rows > 0){
              header('Location: index.view.php?acao=email-cadastrado');
            }else{
              require('../model/registrar.model.php');
              $registrar = new Registrar();
              $registrar->registrar($nome,$email,$password,$sexo);
            }
            
       }