<?php

class BuscarContato {
    public function buscarcontato($index) {
        if(!isset($_SESSION)) 
        { 
          session_start(); 
        } 
        
        $conexao = new Conexao();
        $conexao->conexao();
        $bd = $conexao->bd;

        $id = $_SESSION['userid'];
        $sql = "SELECT nome, email, telefone, id FROM contato WHERE id_usuario = $id AND id = $index";
        $result = $bd->query($sql);
        if ($result->num_rows < 1){
            header('Location: ../agenda');
        }
        $sql2 = "SELECT imagem FROM imagem WHERE id_contato = $index";
        $result2 = $bd->query($sql2);

        $row = $result->fetch_assoc();
        $row2 = $result2->fetch_assoc();

        $contato = [
            'nome' => $row['nome'],
            'email' => $row['email'],
            'telefone' => $row['telefone'],
            'imagem' => $result2->num_rows > 0 ? base64_encode($row2['imagem']) : null
        ];

        return $contato;
    }
}

   
