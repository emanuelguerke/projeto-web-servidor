<?php
    class Buscarcontato{
        private $name;
        private $email;
        private $telefone;
        private $id;
        public function buscarcontato($index){
            require("../conexao.php");
            $id = $_SESSION['userid'];
            $sql = "SELECT nome, email, telefone,id FROM contato where id_usuario = $id AND id = $index";
            $result = $bd->query($sql);
            
            $row = $result->fetch_assoc();
            $name = $row['nome'];
            $email = $row['email'];
            $id = $row['id'];
            $telefone= $row['telefone'];

            echo "<h2>{$row['nome']}</h2>";
            echo "<p>{$row['email']}</p>";
            echo "Telefone: <p>{$row['telefone']}</p>";
        }

        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }
       
    }
   
