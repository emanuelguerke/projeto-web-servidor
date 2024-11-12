<?php
    //sessão startada no verificar logado
   // session_start();
   $index = $_POST['index'];
    class Editarcontato{
        private $index;
        public $contato;
        private $name;
        private $email;
        private $phone;
        public function __construct(){
           
        }
        public function editar_contato($name, $email, $phone,$index){
            require("../conexao.php");
            $sql = "UPDATE contato SET nome = '$name', email = '$email', telefone = '$phone' WHERE id = $index";
            $bd->query($sql);
            header('Location: ../view/agenda.view.php');
            exit();
        }

        public function __set($propriedade, $valor){
            $this->$propriedade = $valor;
        }
        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function getcontato(){
            return $this->contato;
        }
    }