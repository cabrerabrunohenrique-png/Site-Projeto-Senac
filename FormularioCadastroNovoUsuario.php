<?php 
 //para ler o aviso criado na validacao de usuario em bando de dados
session_start(); 
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    

    <link rel ="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">

    <title>Cadastro de Novo Usuario</title>

</head>
<body class ="funbg-body-secondary container" style="">
  

<header style="">
  <nav >
    <div class='' style=' display:flex;justify-content: space-between;text-transform: uppercase'>
      <div class="" style ='text-transform: uppercase'>
      <a class="ar caixa  fontemenu" href="index.php">Pagina de Login</a>
      </div>
     
        <div class="">
          <a class="letraFundoAzul caixa text-bg-warning fontemenu le " href="atualizar.php">Atualizar Cadastro</a>
        </div>
              
        <div class="">
          <a class="letraFundoAzul caixa text-bg-danger fontemenu le " href="deletar.php">Deletar Cadastro</a>
          </div>
      </div>
    </nav>
</header>

<div style='height:20px'></div>
 <main>
  <div class="centro " style='display: flex; justify-content: center '>
    <h1 class="fontemenu">Cadastro Novo Usuario</h1>
  </div>

<form action="sqlCadastroNovoUsuario.php" method="post" onsubmit="return fnValidacao(event)">

  <div class="row g-3">
    <div class="col-12">
        <label for="NomeCompleto" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="NomeCompleto" name="nome_completo"placeholder="Ex.: Bruno Henrique Cabrera">
         <?php
            if (isset($_SESSION['erro_nomecompleto'])):?>
            <div class="letraFundoAzul text-bg-danger fontemenu le" style="margin-top: 5px; padding: 5px; border-radius: 4px; font-size: 0.9rem;">
               <?php echo $_SESSION['erro_nomecompleto'];
                unset($_SESSION['erro_nomecompleto']); // Apaga da memória para o erro sumir se a página for atualizada
              ?>
              <?php endif; //SERVE PARA FECHAR OS {}, OU SEJA, SÓ COLOCAR NO FINAL E FECHA TUDO 
              
              ?>
      </div>
      <div class="col-md-4">
        <label for="NumerodeRegistro" class="form-label">Numero de registro</label>
        <input type="number" class="form-control" id="NumerodeRegistro" name="numero_de_registro" placeholder="Ex.:1, 15, 2024">
        <?php
            if (isset($_SESSION['Existenumero'])):?>
            <div class="letraFundoAzul text-bg-danger fontemenu le" style="margin-top: 5px; padding: 5px; border-radius: 4px; font-size: 0.9rem;">
               <?php echo $_SESSION['Existenumero'];
                unset($_SESSION['Existenumero']); // Apaga da memória para o erro sumir se a página for atualizada
              ?>
              <?php endif; //SERVE PARA FECHAR OS {}, OU SEJA, SÓ COLOCAR NO FINAL E FECHA TUDO 
              
              ?>
      </div>
      <div class="col-md-6">
        <label for="NiveldePermisao" class="form-label">Nivel de Permissao</label>
          <select class="form-select" id="NiveldePermisao" name="nivel_de_permissao">
            <option selected value="">Selecione</option>
              <option></option>
              <option value ="adm" id="Adm">Adm</option>
              <option value ="usuario_comum" id="UsuarioComun">Usuario Comum</option>
              <option value ="usuario_restrito" id ="UsuarioRestrito" >Usuario Restrito</option>                
          </select>
      </div>
      <div class="col-md-6">
        <label for="nome_de_usuario" class="form-label">Nome de Usuario </label>
        <input type="text" class="form-control" id="nome_de_usuario" name="nome_de_usuario" placeholder="Ex.:cabrera25, BrunoCabrebra, @cabrera">
        <?php
            if (isset($_SESSION['erro_cadastro'])):?>
            <div class="letraFundoAzul text-bg-danger fontemenu le" style="margin-top: 5px; padding: 5px; border-radius: 4px; font-size: 0.9rem;">
               <?php echo $_SESSION['erro_cadastro'];
                unset($_SESSION['erro_cadastro']); // Apaga da memória para o erro sumir se a página for atualizada
              ?>
              <?php endif; //SERVE PARA FECHAR OS {}, OU SEJA, SÓ COLOCAR NO FINAL E FECHA TUDO 
              
              ?>
            </d>
      </div>
      <div class="col-md-6">
        <label for="SenhadeAcesso" class="form-label">Senha de Acesso</label>
         <input type="password" class="form-control" id="SenhadeAcesso" name="senha_de_acesso">
       </div>
          <div class="col-md-6">
            <label for="ConfirmarSenhadeAcesso" class="form-label">Confirmar Senha de Acesso</label>
            <input type="password" class="form-control" id="ConfirmarSenhadeAcesso" name="confirmar_senha_de_acesso">
          </div>
        <div class=' mb-3 centro'>
          <button  class=" btn btn-primary" type="submit" >Cadastrar</button>
        </div>
      </div>
    </form>
  </div>

</main>
</body>
<script src="js/validacao.js"></script>
</html>