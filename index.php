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
      

        if ($acao == 'logar') {
            require('controller/logar.controller.php');
           // header('Location: controller/logar.controller.php');
            
        }
        if ($acao == 'registrarusuario') {
            require('controller/registrar.store.controller.php');
        }
        if ($acao == 'registrar') {
            require('controller/registrar.controller.php');
         //   header('Location: controller/registrar.controller.php');
        }
        if ($acao == 'adicionarcontato') {
            require('controller/adicionarcontato.controller.php');
        }
        else{
            require("controller/login.controller.php");
        //    header('Location: controller/login.controller.php');
        }
        
    ?>
</body>
</html>
