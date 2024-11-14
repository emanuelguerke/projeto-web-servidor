<?php
    class Buscarcontato{
        private $name;
        private $email;
        private $telefone;
        private $id;
        private $image;
        public function __construct(){
          
        }
        public function buscarcontato($index){
            require("../conexao.php");
            $id = $_SESSION['userid'];
            $sql = "SELECT nome, email, telefone,id FROM contato where id_usuario = $id AND id = $index";
            $result = $bd->query($sql);

           // $sql2 = "SELECT imagem FROM imagem where id_usuario = $id AND id_contato = $index";
            $sql2 = "SELECT imagem FROM imagem where id_contato = $index";
            $result2 = $bd->query($sql2);

            $row = $result->fetch_assoc();
            $row2 = $result2->fetch_assoc();

            $name = $row['nome'];
            $email = $row['email'];
            $id = $row['id'];
            $telefone= $row['telefone'];
            if ($result2->num_rows > 0){
                $imagem=base64_encode($row2['imagem']);
                $_SESSION['imagem'] = $imagem;
                echo '<img src="data:image/jpeg;base64,' . $imagem . '" alt="sem imagem">';
            }else{
                echo '<img src="data:image/jpeg;base64,' . "" . '" alt="sem imagem">';
            }
           
           
            echo "<h2>{$row['nome']}</h2>";
            echo "<p>{$row['email']}</p>";
            echo "<p>Telefone: {$row['telefone']}</p>";
            
        }

        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }
       
    }
   
