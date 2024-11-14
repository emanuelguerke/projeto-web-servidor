<?php 

    require("../model/editarcontato.model.php");
    
    $editarcontato = new Editarcontato();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
        $editarcontato->name = $_POST['name'];
        $editarcontato->email = $_POST['email'];
        $editarcontato->phone = $_POST['phone'];
        
        $editarcontato->image = $_FILES['imagem']['tmp_name'];
        $editarcontato->size = $_FILES['imagem']['size'];
        $editarcontato->type = $_FILES['imagem']['type'];
        $editarcontato->imagename = $_FILES['imagem']['name'];
        if ( $editarcontato->image != "none" ){
            $fp = fopen($editarcontato->image, "rb");
            $content = fread($fp, $editarcontato->size);
            $content = addslashes($content);
            $editarcontato->image =  $content;
            fclose($fp);
            $index = $_POST['index'];
            $editarcontato->editar_contato($editarcontato->name,$editarcontato->email,$editarcontato->phone, $index, $editarcontato->image);
        }else{
            //$editarcontato->editar_contato($editarcontato->name,$editarcontato->email,$editarcontato->phone, $index);
        }
        
    }