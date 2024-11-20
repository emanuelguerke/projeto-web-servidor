<?php
    class Logar{


        public function logar($email, $password){
          

            $conexao = new Conexao();
            $conexao->conexao();
            $bd = $conexao->bd;  
            // Verifica se o email existe no banco de dados
            $sql = "SELECT id, senha FROM usuario WHERE email = '$email'";
            $result = $bd->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['senha'])) {
                // Login bem-sucedido
                $_SESSION['userid'] = $row['id'];
                echo "Login bem-sucedido!";
                return true;
            } else {
                echo "Senha incorreta!";
                return false;
            }
        } else {
            echo "E-mail não registrado!";
            return false;
        }
            }
            
        }
    

