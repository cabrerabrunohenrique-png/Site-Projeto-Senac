<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>deletar</title>

</head>
<body class ="container" style="">
  <header style="display:flex;justify-content: center;">
    <nav >
      <div class="">
        <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="FormularioCadastroNovoUsuario.php">
          Voltar
        </a>
      </div>
    </nav>
</header>
<main >
    <div class=''style='height:20px'> </div>       
        <div class='' style='display: flex; justify-content: center '>
            <h1 class='fontemenu'style ='text-transform: uppercase ' >Deletar Cadastro de Usuario</h1>
        </div>
  <form action="sqlExcluir.php" method="post" onsubmit="return fnValidacaoB(event)" >
    <div class="row g-3">
      <div class="col-12">
        <label for="NomeCompleto" class="form-label">Nome Completo</label>
        <input  type="text" class="form-control" id="NomeCompleto"name="nome_completo">
      </div>
              
      <div class="col-md-6">
        <label for="nome_de_usuario" class="form-label">Nome de Usuario</label>
          <input type="text" class="form-control" id="nome_de_usuario" name="nome_de_usuario">
      </div>
      <div class="col-md-6">
        <label for="senhade_de_acesso" class="form-label">Senha de Acesso</label>
        <input type="password" class="form-control" id="senhade_de_acesso" name="senhade_de_acesso">
      </div>
      
      <div class="d-flex gap-2 mt-4">
        <button type="submit" class="btn btn-primary">Excluir</button>
      </div>
    </form>
  </main>
    
</body>
<script src="js/validacao.js"></script>

</html>