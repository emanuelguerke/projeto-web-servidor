<?php
require("../controller/verificalogado.controller.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="../style/contato.css">
</head>
<body>
    <div class="container">
        <form action="../view/agenda.view.php">
            <button class="back-btn">Voltar</button>
        </form>
        <h1>Contato</h1>
        <div class="contact-card">
           
            <div class="contact-info">
                <?php
                 //   session_start();
                    require("../controller/buscarcontato.controller.php");
                ?>        
                <div class="buttons">
                <form class= "editar"  action="../controller/editarcontato.controller.php" method="POST">
                    <input type="hidden" name="index" value="<?php echo $index; ?>"> 
                    <button class="edit-btn">Editar</button>
                </form>
                <form class= "excluir"  action="../controller/excluircontato.controller.php" method="POST">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button class="delete-btn" name="delete">Excluir</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
