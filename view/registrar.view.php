
<link rel="stylesheet" href="style/registrar.css">
<div class="formulario">
<form action="index.php?acao=registrarusuario" method="post">
      <div class="titulo">
        <h1>Faça o seu cadastro</h1>
        <div class="barra-horizontal"></div>
      </div>
    
      <div class="campo-input">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nomecadastro"/>
      </div>

      <div class="campo-input">
        <label for="email">E-mail</label>
        <input type="email" id="email" name = "emailcadastro"/>
      </div>

      <div class="campo-input">
        <label for="password">Senha</label>
        <input type="password" id="password" name="passwordcadastro"/>
      </div>
      
      <div class="campo-input">
        <label for="sexo">Sexo</label>
         <select name="sexo" id="sexo">
         <option value="Masculino">Masculino</option>
         <option value="Feminino">Feminino</option>
         </select>
      </div>

      <br>
      
      <button type="submit">Registrar</button>
   

    </form>
</div>
 