
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
            <img src="foto1.jpg" alt="Foto de Contato">
            <div class="contact-info">
                <?php
                    session_start();
                    if (isset($_GET['index']) && isset($_SESSION['contatos'])){
                        $index = $_GET['index'];
                        $contatos = $_SESSION['contatos'];
                        echo "<h2>{$contatos[$index]['name']}</h2>";
                        echo "<p>{$contatos[$index]['email']}</p>";
                        echo "Telefone: <p>{$contatos[$index]['phone']}</p>";
                    }
                ?>        
                <div class="buttons">
                <form class= "editar" action="#">
                    <button class="edit-btn">Editar</button>
                </form>
                <form class= "excluir" action=excluircontato.controller.php?>
                    <button class="delete-btn">Excluir</button>
                </form>
                </div>
            </div>
        </div>
        <!-- Adicione mais cartões de contato conforme necessário -->
    </div>
</body>
</html>
