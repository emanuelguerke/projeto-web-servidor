
<link rel="stylesheet" href="style/registrar.css">
<form action="../controller/registrar.controller.php" method="get">
      <div class="titulo">
        <h1>Faça o seu cadastro</h1>
        <div class="barra-horizontal"></div>
      </div>
    
      <div class="campo-input">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" required="true"/>
      </div>

      <div class="campo-input">
        <label for="email">E-mail</label>
        <input type="email" id="email" required="true" />
      </div>

      <div class="campo-input">
        <label for="password">Senha</label>
        <input type="password" id="password" required="true"/>
      </div>
      
      <div class="campo-input">
        <label for="sexo">Sexo</label>
         <select name="sexo">
         <option value="Masculino">Masculino</option>
         <option value="Feminino">Feminino</option>
         </select>
      </div>

      <br>
      
      <button>Registrar</button>
   
     

    </form>