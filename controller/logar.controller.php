<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ??'';
    $checkbox = $_POST['checkbox'] ??'';
    session_start();

    function login($email, $password){
        if (isset($_SESSION['usuarios'])) {
            foreach ($_SESSION['usuarios'] as $usuario) {
                if ($email == $usuario['email'] && $password == $usuario['password']){
                    return true;
                }
            }
            return false;
        }
    }

    if($password == '' || $email == ''){
        header('Location: index.view.php?acao=erro-campos');
        
    }
    else if ($email == 'emanuel@gmail.com' && $password == '123') {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = 'Emanuel';
        header('Location:  agenda.view.php');
    }else if (login($email, $password)) {
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

