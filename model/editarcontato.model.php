<?php
    session_start();
    $index = $_POST['index'];
    $contato = $_SESSION['contatos'][$index];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $_SESSION['contatos'][$index] = array('name' => $name, 'email' => $email, 'phone' => $phone);
    header('Location: ../view/agenda.view.php');
    exit();
}
?>