<?php 
require("vendor/autoload.php");
    class EditaContatoController{
        public function editar(){
            require("model/editarcontato.model.php");
    
        $editarcontato = new Editarcontato();

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
            $editarcontato->name = $_POST['name'];
            $editarcontato->email = $_POST['email'];
            $editarcontato->phone = $_POST['phone'];
            
            if($_FILES['imagem']['size'] > 500000){
                
                echo "<div class ='erro'>Imagens acima de 500kb não serão aceitas<br><div>";
                // echo htmlentities($_POST['index']);
                // echo '<input type="hidden" name="index" value="' . $index . '">';
                $editarcontato->editar_contato_erro($index);

            }else if(strlen($editarcontato->name) > 30 || strlen($editarcontato->email) > 30 || strlen($editarcontato->phone) > 30){
                echo "<div class ='erro'>Cada campo não pode ter mais que 30 caracteres<br><div>";
                $editarcontato->editar_contato_erro($index);
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
            }
    }
    