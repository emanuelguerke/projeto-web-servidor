<?php
    $verificalogado = new VerificaLogado();
    $verificalogado->verificalogado();
    class Excluircontato{
        function excluir_contato($index) {
            
            $conexao = new Conexao();
            $conexao->conexao();
            $bd = $conexao->bd;

            $id_usuario = $_SESSION['userid'];
            $sql = "DELETE FROM contato WHERE id = $index AND id_usuario =  $id_usuario";
            $bd->query($sql);
            header('Location: agenda');
        }
    }





