<?php
    require("vendor/autoload.php");
    class AdicionarContatoController{
        public function adicionarcontato(){
            $adicionarcontato = new Adicionarcontato();
            $validartelefone = new ValidarTelefoneController();
            $validaremail = new ValidarEmailController();
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $adicionarcontato->name = $_POST['name'];
                $adicionarcontato->email = $_POST['email'];
                $adicionarcontato->phone = $_POST['phone'];
                //Valida se os input não ultrapassam o permitido e se o celular está nos padrões brasileiros ddd + telefone começando com 9
                if(strlen($adicionarcontato->name) > 30 || strlen($adicionarcontato->email) > 30 || strlen($adicionarcontato->phone) > 30){
                    header('Location: erro-campo-maximo');
                }//Valida se os campos não estão vazios
                else if($adicionarcontato->name == '' || $adicionarcontato->email == '' || $adicionarcontato->phone == ''){
                    header('Location: erro-campo-vazio-adicionar');
                }else if(!$validartelefone->validartelefone($adicionarcontato->phone)){
                    header('Location: erro-telefone-adicionar');
                }else if(!$validaremail->validaremail($adicionarcontato->email)){
                    header('Location: erro-email-adicionar');
                }
                else{
                    $adicionarcontato->adicionar_contato($adicionarcontato->name, $adicionarcontato->email, $adicionarcontato->phone);
                }
        
            }
        }
    }
   

    