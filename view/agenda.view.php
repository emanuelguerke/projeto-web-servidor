<?php
    session_start();

    if(empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
        header('Location: ..\index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
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
                <form>
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">Telefone:</label>
                    <input type="tel" id="phone" name="phone" required>
                    
                    <button type="submit">Adicionar Contato</button>
                </form>
            </section>
            <section id="contact-list">
                <h2>Lista de Contatos</h2>
                <ul>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                    <li><a href="#">Pessoa</a></li>
                </ul>
            </section>
            <a href="..\controller\logout.controller.php">Sair</a>
        </main>
        <footer>
            <p>&copy; UTFPR 2024 Agenda de Contatos.</p>
        </footer>
    </div>
</body>
</html>
