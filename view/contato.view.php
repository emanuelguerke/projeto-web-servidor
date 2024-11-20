<?php
    require("vendor/autoload.php");
    $verificalogado = new VerificaLogado();
    $verificalogado->verificalogado();
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
        <form action="../agenda">
            <button class="back-btn">Voltar</button>
        </form>
        <h1>Contato</h1>
        <div class="contact-card">
            <div class="contact-info">
                <?php if ($contato): ?>
                    <?php if ($contato['imagem']): ?>
                        <img src="data:image/jpeg;base64,<?php echo $contato['imagem']; ?>" alt="Imagem do Contato">
                    <?php else: ?>
                        <img src="data:image/jpeg;base64," alt="Sem Imagem">
                    <?php endif; ?>
                    <h2><?php echo $contato['nome']; ?></h2>
                    <p><?php echo $contato['email']; ?></p>
                    <p>Telefone: <?php echo $contato['telefone']; ?></p>
                <?php else: ?>
                    <p>Contato não encontrado</p>
                <?php endif; ?>
                <div class="buttons">
                    <form class="editar" action="../editar" method="POST">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button class="edit-btn">Editar</button>
                    </form>
                    <form class="excluir" action="../excluir" method="POST">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button class="delete-btn" name="delete">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
