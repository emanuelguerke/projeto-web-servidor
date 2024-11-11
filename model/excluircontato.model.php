<?php
session_start();
class Excluircontato{
    function excluir_contato($index) {
        if (isset($_SESSION['contatos'][$index])) {
            unset($_SESSION['contatos'][$index]);
            $_SESSION['contatos'] = array_values($_SESSION['contatos']);
            header('Location: ../view/agenda.view.php');
        }
    }
}





