
<link rel="stylesheet" href="style/login.css">
<div class="formulario">
<form class= "logar" action="index.php?acao=logar" method="POST">
  
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
    <form action="index.php?acao=registrar" method="POST">
      <button class="nova-conta">Criar nova conta</button>
    </form>
    </div>
</div>
   