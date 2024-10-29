<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ??'';
    $checkbox = $_POST['checkbox'] ??'';
    session_start();

    if ($email == 'emanuel@gmail.com' && $password == '123') {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = 'Emanuel';
    
        header('Location:  view\agenda.view.php');
    }
    else if($password == '' || $email == ''){
        header('Location: index.php?acao=erro-campos');
    }else{

    }
    //Checar se o usuário já está logado
    if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
        header('Location: view\agenda.view.php');
    }