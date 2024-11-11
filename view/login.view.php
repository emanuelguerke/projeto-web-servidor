<head>
<link rel="stylesheet" href="../style/login.css">
</head>
<body>
<div class="formulario">
<form class= "logar" action="index.view.php?acao=logar" method="POST">
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
      <div class="checkbox">
        <input id="lembrar" type="checkbox" name="checkbox"/>
        <p>Lembrar senha</p>
      </div>
      <br>
      <button type="submit">Entrar</button>
      <br>
      <br>
      <p class="esqueceu-senha">
        <a href="https://google.com"> Esqueci minha senha</a>
      </p>
      
    </form>
    <div>
    <form action="registrar.view.php">
      <button class="nova-conta">Criar nova conta</button>
    </form>
    <?php 
       
       if(isset($_GET['acao'])){
         $acao = $_GET['acao'];
         if ($acao == 'erro-campos') {
           // $mensagem = "erro nos campos";
            echo '<div><p style="color: red">*preencha todos os campos</p><div>';
          }else if($acao == 'email-senha'){
            echo '<div><p style="color: red">*Senha ou Email incorretos</p><div>';
        }
       }
       ?>
    </div>
</div>
</body>