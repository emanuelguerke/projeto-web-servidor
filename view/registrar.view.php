
<link rel="stylesheet" href="../style/registrar.css">
<div class="formulario">
<form action="registrarusuario" method="post">

      <div class="titulo">
        <h1>Faça o seu cadastro</h1>
        <div class="barra-horizontal"></div>
      </div>
      <div class="campo-input">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nome"/>
      </div>

      <div class="campo-input">
        <label for="email">E-mail</label>
        <input type="email" id="email" name = "email"/>
      </div>

      <div class="campo-input">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password"/>
      </div>
      
      <div class="campo-input">
        <label for="sexo">Sexo</label>
         <select name="sexo" id="sexo">
         <option value="Masculino">Masculino</option>
         <option value="Feminino">Feminino</option>
         </select>
      </div>

      <br>
      
      <button type="submit" value="registrar">Registrar</button>

      <?php 
       if ( $_SESSION['url'] == '/erro-campos-cadastro/') {
        // $mensagem = "erro nos campos";
         echo '<div><p style="color: red">*preencha todos os campos</p><div>';
       }else if($_SESSION['url'] == '/email-cadastrado/'){
         echo '<div><p style="color: red">*email já cadastrado</p><div>';
     }else if($_SESSION['url'] == '/erro-campo-email/'){
      echo '<div><p style="color: red">*insira um email valido</p><div>';
  }
      ?>

    </form>
</div>
 