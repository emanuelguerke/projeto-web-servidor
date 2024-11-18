<head>
<link rel="stylesheet" href="../style/login.css">
</head>
<body>
<div class="formulario">
<form class= "logar" action="logar" method="POST">
  <div id="mensagem"></div>
      <div class="titulo">
        <h1>Faça o login</h1>
        <div class="barra-horizontal"></div>
      </div>
      <br>
      <div class="campo-input">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" />
      </div>
      <br>
      <div class="campo-input">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password"/>
      </div>
      <br>
      <br>
      <br>
      <button type="submit">Entrar</button>
      <br>
      
    </form>
    <div>
    <form action="registrar">
      <button class="nova-conta">Criar nova conta</button>
    </form>
    <?php 
       //echo $_SESSION['url'];
       if ( $_SESSION['url'] == '/erro-campos/') {
        // $mensagem = "erro nos campos";
         echo '<div><p style="color: red">*preencha todos os campos</p><div>';
       }else if($_SESSION['url'] == '/email-senha/'){
         echo '<div><p style="color: red">*Senha ou Email incorretos</p><div>';
     }
       ?>
    </div>
</div>
</body>