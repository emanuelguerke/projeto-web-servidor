<?php
    require("vendor/autoload.php");
    class AdicionarContatoController{
        public function adicionarcontato(){
            $adicionarcontato = new Adicionarcontato();
            $validartelefone = new ValidarTelefoneController();
        
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $adicionarcontato->name = $_POST['name'];
                $adicionarcontato->email = $_POST['email'];
                $adicionarcontato->phone = $_POST['phone'];
                //Valida se os input não ultrapassam o permitido e se o celular está nos padrões brasileiros ddd + telefone começando com 9
                if(strlen($adicionarcontato->name) > 30 || strlen($adicionarcontato->email) > 30 || strlen($adicionarcontato->phone) > 30 || !$validartelefone->validartelefone($adicionarcontato->phone)){
                    header('Location: agenda');
                }else{
                    $adicionarcontato->adicionar_contato($adicionarcontato->name, $adicionarcontato->email, $adicionarcontato->phone);
                }
        
            }
        }
    }
   

    