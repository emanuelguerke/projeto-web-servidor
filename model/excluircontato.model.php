<?php
session_start();
class Excluircontato{
    function excluir_contato($index) {
        require("conexao.php");
        $sql = "DELETE FROM contato WHERE id = $index";
        $bd->query($sql);
        header('Location: agenda');
    }
}





