<?php 
    class ExcluirContatoController{
        public function excluir(){
            require("model/excluircontato.model.php");
            $excluircontato = new Excluircontato();
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
                $index = $_POST['index'];
                $excluircontato->excluir_contato($index);
            }
        }
    }
  