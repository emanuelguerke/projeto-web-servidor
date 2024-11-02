<?php
      $nome = $_POST['nome'] ?? '';
      $email = $_POST['email'] ?? '';
      $password = $_POST['password'] ??'';
      $sexo = $_POST['sexo'] ??'';

      if($password == '' || $email == '' || $sexo == '' || $nome == '') {
        //  header('Location: index.view.php?acao=erro-campos');
            header('Location: index.view.php?acao=erro-campos-cadastro');
        
       }else{
          // echo "$password e o $email e checkbox $checkbox" ;
         //  require('controller\agenda.controller.php');
         //   header('Location: view\agenda.view.php');
           //  echo "$emailcadastro $passwordcadastro $nomecadastro $sexo"; 
       //    header('Location: agenda.view.php');
           // header('Location: ../model/registrar.model.php');
            require('../model/registrar.model.php');
       }