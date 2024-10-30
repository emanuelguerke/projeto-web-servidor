<?php
session_start();

// Vetor para armazenar os contatos
if (!isset($_SESSION['contatos'])) {
    $_SESSION['contatos'] = array();
}

// Função para adicionar um contato
function adicionar_contato($name, $email, $phone) {
    $contato = array('name' => $name, 'email' => $email, 'phone'=> $phone);
    $_SESSION['contatos'][] = $contato;
}

// Processa o formulário se os dados foram enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    adicionar_contato($name, $email, $phone);
}

// Recupera os contatos armazenados na sessão
$contatos = $_SESSION['contatos'];

header('Location: view\agenda.view.php');