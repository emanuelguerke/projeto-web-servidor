<?php
    require("vendor/autoload.php");
    $verificalogado = New VerificaLogado();
    $verificalogado->verificalogado();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
    <link rel="stylesheet" href="../style/editar.css">
</head>
<body>
    <h1>Editar Contato</h1>
    <form method="post" action="/edit" enctype="multipart/form-data">
        <?php require("controller/buscareditarcontato.controller.php"); ?> 
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <button type="submit" name="edit">Salvar</button>
    </form>
    <?php 
       if ( $_SESSION['url'] == '/erro-campos-tamanho-maximo/') {
         echo '<div><p style="color: red">*Cada campo não pode ter mais que 30 caracteres</p><div>';
       }else if($_SESSION['url'] == '/erro-tamanho-maximo-imagem/'){
         echo '<div><p style="color: red">*Imagens acima de 500kb não serão aceitas</p><div>';
      }else if($_SESSION['url'] == '/erro-telefone/'){
        echo '<div><p style="color: red">*Coloque um numero valido (xx) 9xxxx-xxxx ou xx 9xxxxxxxx ou xx9xxxxxxxx ou xxxx-xxxx ou (xx) xxxx-xxxx ou xxx </p><div>';
      }else if($_SESSION['url'] == '/erro-email/'){
        echo '<div><p style="color: red">*O email precisa ser valido';
      }else if($_SESSION['url'] == '/erro-campo-vazio/'){
        echo '<div><p style="color: red">*Todos os campos precisam ser preenchidos</p><div>';
      }
       ?>
</body>
</html>