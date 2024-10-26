<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <?php
        
        $acao = $_GET['acao'] ?? 'index';
        if ($acao == 'erro-campos') {
            echo 'preencha todos os campos';
        }

        if ($acao == 'logar') {
            require('controller/logar.controller.php');
        }if ($acao == 'registrar') {
            require('controller\registrar.controller.php');
        }else{
            
            require("controller/login.controller.php");
        }
        
    ?>
</body>
</html>
