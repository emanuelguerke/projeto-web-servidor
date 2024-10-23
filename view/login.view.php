
<link rel="stylesheet" href="style/login.css">
<form action="../controller/login.controller.php" method="get">
      <div class="titulo">
        <h1>Faça o login</h1>
        <div class="barra-horizontal"></div>
      </div>

      <div class="campo-input">
        <label for="email">E-mail</label>
        <input type="email" id="email" />
      </div>

      <div class="campo-input">
        <label for="password">Senha</label>
        <input type="password" id="password" />
      </div>

      <div class="checkbox">
        <input type="checkbox" />
        <p>Lembrar senha</p>
      </div>

      <button>Entrar</button>

      <p class="esqueceu-senha">
        <a href="https://google.com"> Esqueci minha senha</a>
      </p>

      <button class="nova-conta">Criar nova conta</button>

    </form>