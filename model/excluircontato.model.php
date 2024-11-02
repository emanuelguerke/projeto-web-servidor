<?php
session_start();
echo "teste";

function excluir_contato($index) {
    if (isset($_SESSION['contatos'][$index])) {
        unset($_SESSION['contatos'][$index]);
        $_SESSION['contatos'] = array_values($_SESSION['contatos']);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $index = $_POST['index'];
    excluir_contato($index);
}

echo $index;
header('Location: ../view/agenda.view.php');

?>
