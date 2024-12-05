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
            <?php 
                if ( $_SESSION['url'] == '/erro-campo-maximo/') {
                    echo '<div><p style="color: red">*Cada campo não pode ter mais que 30 caracteres</p><div>';
                }else if($_SESSION['url'] == '/erro-campo-vazio-adicionar/'){
                    echo '<div><p style="color: red">*Preencha todos os campos</p><div>';
                }else if($_SESSION['url'] == '/erro-telefone-adicionar/'){
                    echo '<div><p style="color: red">*Coloque um numero valido (xx) 9xxxx-xxxx ou xx 9xxxxxxxx ou xx9xxxxxxxx ou xxxx-xxxx ou (xx) xxxx-xxxx ou xxx</p><div>';
                }else if($_SESSION['url'] == '/erro-email-adicionar/'){
                    echo '<div><p style="color: red">*Coloque um E-mail valido</p><div>';
                }
                
            ?>
                <h2>Adicionar Novo Contato</h2>
                <form  action="adicionarcontato" method="POST">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" placeholder="nome">
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="exemplo@gmail.com">
                    
                    <label for="phone">Telefone:</label>
                    <input type="tel" id="phone" name="phone" placeholder="(XX) 9XXXX-XXXX" title="Formato esperado: (XX) 9XXXX-XXXX">
                    
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

