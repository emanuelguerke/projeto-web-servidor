<?php
    session_start();
    class Adicionarcontato{
        private $name;
        private $email;
        private $phone;
        private $contatos;
        private $id;

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
            require("../conexao.php");
            $id= $_SESSION['userid'];
            $sql = "INSERT INTO contato (nome,email,telefone,id_usuario) VALUES ('$name', '$email', '$phone', '$id')";
            $bd->query($sql);

            $contatos = $_SESSION['contatos'];
            header('Location: agenda.view.php');
        }
        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }


        
    }









