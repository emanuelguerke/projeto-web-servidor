<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ??'';
    $checkbox = $_POST['checkbox'] ??'';
    session_start();

    if($password == '' || $email == ''){
        header('Location: index.view.php?acao=erro-campos');
        
    }
    else if ($email == 'emanuel@gmail.com' && $password == '123') {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = 'Emanuel';
    
        header('Location:  agenda.view.php');
    }else{
        header('Location: index.view.php?acao=email-senha');
    }
   
    //Checar se o usuário já está logado
    if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
        header('Location: agenda.view.php');
    }