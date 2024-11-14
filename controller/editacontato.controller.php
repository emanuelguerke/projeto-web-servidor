<?php 

    require("../model/editarcontato.model.php");
    
    $editarcontato = new Editarcontato();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
        $editarcontato->name = $_POST['name'];
        $editarcontato->email = $_POST['email'];
        $editarcontato->phone = $_POST['phone'];
        
        if($_FILES['imagem']['size'] > 500000){
            echo "Imagens acima de 500kb não serão aceitas";
        }else if(strlen($editarcontato->name) > 30 || strlen($editarcontato->email) > 30 || strlen($editarcontato->phone) > 30){
            echo "Cada campo não pode ter mais que 30 caracteres";
        }
        else if ( !empty($_FILES['imagem']['tmp_name'] && $_FILES['imagem']['size'] < 500000)){
            $editarcontato->image = $_FILES['imagem']['tmp_name'];
            $editarcontato->size = $_FILES['imagem']['size'];
            $editarcontato->type = $_FILES['imagem']['type'];
            $editarcontato->imagename = $_FILES['imagem']['name'];
           

            $fp = fopen($editarcontato->image, "rb");
            $content = fread($fp, $editarcontato->size);
            $content = addslashes($content);
            $editarcontato->image =  $content;
            fclose($fp);
            $index = $_POST['index'];
            $editarcontato->editar_contato($editarcontato->name,$editarcontato->email,$editarcontato->phone, $index, $editarcontato->image, $editarcontato->size,  $editarcontato->type,  $editarcontato->imagename);
        }
        else{
            $editarcontato->editar_contato2($editarcontato->name,$editarcontato->email,$editarcontato->phone, $index);
        }
        
    }