<?php
   $index = $_POST['index'];
    class Editarcontato{
        private $index;
        public $contato;
        private $name;
        private $email;
        private $phone;
        private $image;
        private $type;
        private $size;
        private $imagename;
        public function __construct(){
           
        }
        public function editar_contato($name, $email, $phone,$index, $image, $size, $type, $imagename){
            
            $conexao = new Conexao();
            $conexao->conexao();
            $bd = $conexao->bd;

            $id_usuario = $_SESSION['userid'];
            $sql = "UPDATE contato SET nome = '$name', email = '$email', telefone = '$phone' WHERE id = $index AND id_usuario = $id_usuario";
            $bd->query($sql);
            $sql2 = "UPDATE imagem SET imagem ='$image', tamanho ='$size', tipo ='$type', nome = '$imagename' WHERE id_contato = $index";
            $bd->query($sql2);
            header('Location: agenda');
            exit();
        }
        public function editar_contato2($name, $email, $phone,$index){
            
            $conexao = new Conexao();
            $conexao->conexao();
            $bd = $conexao->bd;
            
            $id_usuario = $_SESSION['userid'];
            $sql = "UPDATE contato SET nome = '$name', email = '$email', telefone = '$phone' WHERE id = $index AND id_usuario = $id_usuario";
            $bd->query($sql);
            header('Location: agenda');
            exit();
        }public function editar_contato_erro($index){
            $buscarcontato = new BuscarContatoController();
            $buscarcontato->buscarcontato( $index);
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