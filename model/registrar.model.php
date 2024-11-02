<?php

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sexo = $_POST['sexo'];
    session_start();

    $_SESSION['usuarios'][] = [
        'nome' => $nome,
        'email' => $email,
        'password' => $password,
        'sexo' => $sexo
    ];
    echo "Usuário cadastrado com sucesso!";
    header('Location: ../view/agenda.view.php');
    //require("../view/agenda.view.php'");
