<?php
    class Buscarcontatos{
        public function buscarcontatos(){
            
            $conexao = new Conexao();
            $conexao->conexao();
            $bd = $conexao->bd;

            $id = $_SESSION['userid'];
            $sql = "SELECT nome, email, telefone,id FROM contato where id_usuario = $id";
            $result = $bd->query($sql);
            
            if ($result->num_rows > 0) {
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    //echo "<li>" . $row["nome"]. " - " . $row["email"]. " - " . $row["telefone"]. "</li>";
                    echo "<li><a href=contato/{$row['id']}>". $row['nome']." - ".   $row['email']. " - ". $row['telefone']."</a></li>";
                }
                echo "</ul>";
            } else {
                echo "Nenhum contato encontrado";
            }
            
            $bd->close();
        }
    }
   
  
    