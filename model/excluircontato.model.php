<?php
session_start();
class Excluircontato{
    function excluir_contato($index) {
        require("conexao.php");
        $id_usuario = $_SESSION['userid'];
        $sql = "DELETE FROM contato WHERE id = $index AND id_usuario =  $id_usuario";
        $bd->query($sql);
        header('Location: agenda');
    }
}





