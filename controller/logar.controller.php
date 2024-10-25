<?php
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ??'';
    $checkbox = $_POST['checkbox'] ??'';
    if($password == '' || $email == ''){
        header('Location: index.php?acao=erro-campos');
    }else{
        echo "$password e o $email e checkbox $checkbox" ;
    }
 