<?php 
    require("vendor/autoload.php");
    class ExcluirContatoController{
        public function excluir(){
            $excluircontato = new Excluircontato();
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
                $index = $_POST['index'];
                $excluircontato->excluir_contato($index);
            }
        }
    }
  