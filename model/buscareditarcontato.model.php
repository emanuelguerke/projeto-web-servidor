<?php
    class BuscarEditarcontato{
        public $name;
        private $email;
        private $telefone;
        private $id;
        private $imagem;
        public function buscarcontato($index){
            require("conexao.php");
            $id = $_SESSION['userid'];
            $sql = "SELECT nome, email, telefone,id FROM contato where id_usuario = $id AND id = $index";
            $result = $bd->query($sql);
            
            //$sql2 = "SELECT imagem FROM imagem where id_usuario = $id AND id_contato = $index";
            $sql2 = "SELECT imagem FROM imagem where id_contato = $index";
            $result2 = $bd->query($sql2);

            $row = $result->fetch_assoc();
            if ($result2->num_rows > 0){
                $row2 = $result2->fetch_assoc();
                $imagem=$row2['imagem'];
            }
            $name = $row['nome'];
            $email = $row['email'];
            $id = $row['id'];
            $telefone= $row['telefone'];
            
        echo '
            Foto do contato
            <br>
            <br>
            <input type="file" name="imagem" accept="image/*" >
            <br>
            <br>
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

  