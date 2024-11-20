<?php
    require("vendor/autoload.php");
    $verificalogado = new VerificaLogado();
    $verificalogado->verificalogado();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="../style/agenda.css">
</head>
<body>
    <div class="container">
        <header>
           
            <h1>Bem-vindo à sua Agenda de Contatos</h1>
        </header>
        <main>
            <section id="contact-form">
                <h2>Adicionar Novo Contato</h2>
                <form  action="adicionarcontato" method="POST">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">Telefone:</label>
                    <input type="tel" id="phone" name="phone" required>
                    
                    <button type="submit">Adicionar Contato</button>
                </form>
            </section>
            <h2>Lista de Contatos</h2>
            <section id="contact-list">
               <?php $buscarcontatos = new Buscarcontatos(); $buscarcontatos->buscarcontatos()?>
            </section>
            
        </main>
        <footer>
            <a href="controller\logout.controller.php" class="button">Deslogar</a>
            <p>&copy; UTFPR 2024 Agenda de Contatos.</p>
        </footer>
    </div>
</body>

