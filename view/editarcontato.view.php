<?php
require("../controller/verificalogado.controller.php");
require("../controller/editacontato.controller.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
    <link rel="stylesheet" href="../style/editar.css">
</head>
<body>
    <h1>Editar Contato</h1>
    <form method="post" action="">
        Nome
        <input type="text" name="name" value="<?php echo htmlspecialchars($contato['name']); ?>" required>
        E-mail
        <input type="email" name="email" value="<?php echo htmlspecialchars($contato['email']); ?>" required>
        Telefone
        <input type="text" name="phone" value="<?php echo htmlspecialchars($contato['phone']); ?>" required>
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <button type="submit" name="edit">Salvar</button>
    </form>
</body>
</html>
