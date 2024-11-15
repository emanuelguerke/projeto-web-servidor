<?php
    class AdicionarContatoController{
        public function adicionarcontato(){
            require("model/adicionarcontato.model.php");
   
            $adicionarcontato = new Adicionarcontato();
        
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $adicionarcontato->name = $_POST['name'];
                $adicionarcontato->email = $_POST['email'];
                $adicionarcontato->phone = $_POST['phone'];
                if(strlen($adicionarcontato->name) > 30 || strlen($adicionarcontato->email) > 30 || strlen($adicionarcontato->phone) > 30){
                    header('Location: agenda');
                }else{
                    $adicionarcontato->adicionar_contato($adicionarcontato->name, $adicionarcontato->email, $adicionarcontato->phone);
                }
        
            }
        }
    }
   

    