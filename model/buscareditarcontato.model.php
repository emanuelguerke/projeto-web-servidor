<?php
    class BuscarEditarcontato{
        public $name;
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
           
        echo '
            Nome
            <input type="text" name="name" value="' . htmlspecialchars($name) . '" required>
            E-mail
            <input type="email" name="email" value="' . htmlspecialchars($email) . '" required>
            Telefone
            <input type="text" name="phone" value="' . htmlspecialchars($telefone) . '" required>
        ';


        }

        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }
       
    }

  