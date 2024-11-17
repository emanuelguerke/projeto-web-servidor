<?php
      require('conexao.php');

    // $nome = 'pedro';
    // $email = 'pedro@gmail.com';
    // $senha = '222';
    // $sexo = 'masculino';

    // $bd->query("INSERT INTO usuario (nome, sexo, email, senha) VALUES ('${nome}', '${sexo}', '${email}', '${senha}')");
    // $id = $bd-> insert_id;

    // echo "o id é ${id}";

    // $query = $bd -> query("SELECT * FROM usuario");
    // if($query ->num_rows > 0 ){
    //     while($usuario = $query ->fetch_object()){
    //         echo "nome: $usuario->nome sexo: $usuario->sexo email: $usuario->email senha: $usuario->senha <br>";

    //     }
    // }else{
    //     echo "não ha usuarios";
    // }

    // $query = $bd -> query("DELETE FROM usuario WHERE id = 1");
    // echo "linhas afetadas: $bd->affected_rows";
    $query = $bd -> query("UPDATE usuario SET nome = 'manu' where id = 3");
    echo "linhas afetadas: $bd->affected_rows";

