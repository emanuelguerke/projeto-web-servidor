<?php
        
       $nomecadastro = $_POST['nomecadastro'] ?? '';
       $emailcadastro = $_POST['emailcadastro'] ?? '';
       $passwordcadastro = $_POST['passwordcadastro'] ??'';
       $sexo = $_POST['sexo'] ??'';
       if($passwordcadastro == '' || $emailcadastro == '' || $sexo == '' || $nomecadastro == '') {
        //   header('Location: index.view.php?acao=erro-campos');
        header('Location: registrar.view.php');
        
       }else{
          // echo "$password e o $email e checkbox $checkbox" ;
         //  require('controller\agenda.controller.php');
        //   header('Location: view\agenda.view.php');
           //  echo "$emailcadastro $passwordcadastro $nomecadastro $sexo"; 
           header('Location: agenda.view.php');
       }