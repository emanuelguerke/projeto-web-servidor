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
</body>
</html>
