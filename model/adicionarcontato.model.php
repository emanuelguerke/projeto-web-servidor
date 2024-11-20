<?php
     if(!isset($_SESSION)) 
     { 
       session_start(); 
     } 
    require("vendor/autoload.php");
    class Adicionarcontato{
        private $name;
        private $email;
        private $phone;
        private $contatos;
        private $id;
        private $contactid;

        public function __construct(){
            // Vetor para armazenar os contatos
            if (!isset($_SESSION['contatos'])) {
                $_SESSION['contatos'] = array();
            }
        }
        // Função para adicionar um contato
        public function adicionar_contato($name, $email, $phone) {
            $contato = array('name' => $name, 'email' => $email, 'phone'=> $phone);
            $_SESSION['contatos'][] = $contato;

            //fazendo pelo banco
           // require("conexao.php");
            $conexao = new Conexao();
            $conexao->conexao();

            $id= $_SESSION['userid'];
            $sql = "INSERT INTO contato (nome,email,telefone,id_usuario) VALUES ('$name', '$email', '$phone', '$id')";
            
            $bd = $conexao->bd;

            $bd->query($sql);

            $contactid=mysqli_insert_id($bd);

            $sql2 = "INSERT INTO imagem (id_contato) VALUES ('$contactid')";
            $bd->query($sql2);
            $contatos = $_SESSION['contatos'];
            header('Location: agenda');
        }
        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }


        
    }









