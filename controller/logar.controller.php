<?php
    require("../model/logar.model.php");
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ??'';
    $checkbox = $_POST['checkbox'] ??'';
    session_start();

    $logar = new Logar(); 

    if($password == '' || $email == ''){
        header('Location: index.view.php?acao=erro-campos');
        
    }
    else if ($logar->logar($email, $password)) {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $usuario['email'];
        header('Location:  agenda.view.php');
    }
    else{
        header('Location: index.view.php?acao=email-senha');
    }

   
    //Checar se o usuário já está logado
    if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
        header('Location: agenda.view.php');
    }

