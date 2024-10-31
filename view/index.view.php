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
            require("../controller/login.controller.php");
        }else if ($acao == 'erro-campos-cadastro') {
            require("../controller/registrar.controller.php");
        }
        else if ($acao == 'email-senha') {
            require("../controller/login.controller.php");
        }
        else if ($acao == 'logar') {
            require('../controller/logar.controller.php');
           // header('Location: controller/logar.controller.php');
            
        }
        else if ($acao == 'registrarusuario') {
            require('../controller/registrar.store.controller.php');
        }
        else if ($acao == 'registrar') {
              require('../controller/registrar.controller.php');
          //  header('Location: controller/registrar.controller.php');
        }
        else if ($acao == 'adicionarcontato') {
            require('../controller/adicionarcontato.controller.php');

        }else if ($acao == 'excluircontato') {
            require('../controller/excluircontato.controller.php');
        }
        else{
            require("../controller/agenda.controller.php");
        //    header('Location: controller/login.controller.php');
        }
        
    ?>
</body>
</html>
