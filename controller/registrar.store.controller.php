<?php
      require("vendor/autoload.php");
      class RegistrarUsuario{
        function registrarusuario(){
          $nome = $_POST['nome'] ?? '';
          $email = $_POST['email'] ?? '';
          //password hash pra ser utilizado com o password verify
          $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ??'';
          $sexo = $_POST['sexo'] ??'';
          $validaremail = new ValidarEmailController();
          if($_POST['password'] == '' || $email == '' || $sexo == '' || $nome == '') {
            //  header('Location: index.view.php?acao=erro-campos');
                header('Location: erro-campos-cadastro');
            
           }else if(!$validaremail->validarEmail($email)){
                header('Location: erro-campo-email');
           }else{
                $conexao = new Conexao();
                $conexao->conexao();
                $bd = $conexao->bd;

                $sql = "SELECT id FROM usuario WHERE email = '$email'"; 
                $result = $bd->query($sql);
                if($result->num_rows > 0){
                  header('Location: email-cadastrado');
                }else{
                  $registrar = new Registrar();
                  $registrar->registrar($nome,$email,$password,$sexo);
                }
                
           }
      }
    }