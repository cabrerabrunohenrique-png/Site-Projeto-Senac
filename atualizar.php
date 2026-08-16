<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:index.php');
    exit;

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

     <link rel ="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
  <title>Atualizar usuario</title>

</head>
<body class ="container" style="">
 
<!-- corpo -->
<header style="display:flex;justify-content: center;">

   <nav >
        <!-- //espaço para cada titulo de navegacao -->
        <div class="">
             <!-- //link para acessar -->
            <a class="letraPretoAzul caixa text-bg-info  fontemenu le link-alerta" href="FormularioCadastroNovoUsuario.php">
            Voltar
            </a>
        </div>
    </nav>

</header>
<main>
<div class=''style='height:20px'></div>
<div class='' style='display: flex; justify-content: center '>
  <h1 class='fontemenu'style ='text-transform: uppercase ' >Atualizar Cadastro de Usuario</h1>
  <a href="../listagem/lista_usuario.php" onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;">Relação de Usuarios</a>
</div>
<div class=''style='height:20px'></div>
<form  action="sqlEditar.php" method="post"  onsubmit="return fnValidacaoB(event)" style="">
  <div class=" g-3" style="display:flex;justify-content: space-between;">
    <div class="col-3">
      <label for="NomeCompleto" class="form-label" style="display:flex;justify-content:center">Nome Completo</label>
      <input type="text" class="form-control" id="NomeCompleto" name="nome_completo">
    </div>
    <div class="col-md-3">
      <label for="NiveldePermisao" class="form-label dp">Nivel de Permissao</label>
        <select class="form-select" id="NiveldePermisao" name="nivel_de_permissao">
          <option selected value="">Selecione</option>
          <option></option>
          <option>adm</option>
          <option>usuario Comum</option>
          <option>usuario Restrito</option>
        </select>
    </div>
    <div class="col-md-3">
      <label for="nome_de_usuario" class="form-label dp">Nome de Usuario</label>
      <input type="text" class="form-control" id="nome_de_usuario" name="nome_de_usuario">
      <?php if(isset($_SESSION['usuario'])){?>
          <div class="letraFundoAzul text-bg-danger fontemenu le" style="margin-top: 5px;     padding: 5px; border-radius: 4px; font-size: 0.9rem;">
            <?php echo $_SESSION['usuario'];
            unset($_SESSION['usuario']); ?>
          </div>
          <?php } ?>
    </div> 
  </div>   
  <div style="display:flex;justify-content:space-between;" class=" g-3">
    
    <div class="col-md-3">
      <label for="SenhadeAcesso" class="form-label dp">Senha de Acesso</label>
      
     
      <input type="password" class="form-control" id="SenhadeAcesso" name="senhade_de_acesso">

   

    </div>
    <div class="col-md-3">
      <label for="ConfirmarSenhadeAcesso" class="form-label dp">Confirmar Senha de Acesso</label>
      <input type="password" class="form-control" id="ConfirmarSenhadeAcesso" name="senha_de_acesso">
    </div>
    <div class="col-md-3">
      <label for="data" class="form-label dp">Data Alteração</label>
      <input type="date" class="form-control" id="data" name="data">
    </div>
  </div>
  <div class=''style='height:20px'></div>
  <div style="display:flex;justify-content: center;">
    <button type="submit" class="btn btn-primary" ">Atualizar</button>
  </div>
</form>

</main>
    
</body>
<script src="js/validacao.js"></script>
</html>