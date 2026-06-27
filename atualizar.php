<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Cadastro de Novo Usuario</title>

</head>
<body class ="container" style="border: 1px solid blue; ">
 
<!-- corpo -->
<header style="border: 1px solid red;display:flex;justify-content: center;">

   <nav >
        <!-- //espaço para cada titulo de navegacao -->
        <div class="box_cinza_claro">
             <!-- //link para acessar -->
            <a class="box_letra" href="FormularioCadastroNovoUsuario.php">
            Voltar
            </a>
        </div>

        
    </nav>

   
    

</header>
<main >

<form style="border: 1px solid blue;">
          <div class="row g-3">
            <div class="col-12">
              <label for="tituloFilme" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="tituloFilme" name="tituloFilme"
                placeholder="Ex.: Cidade de Deus">
            </div>
            <div class="col-md-4">
              <label for="anoProducao" class="form-label">Numero de registro</label>
              <input type="number" class="form-control" id="anoProducao" name="anoProducao" placeholder="Ex.: 2024">
            </div>
            <div class="col-md-6">
              <label for="generoPrincipal" class="form-label">Nivel de Permissao</label>
              <select class="form-select" id="generoPrincipal" name="generoPrincipal">
                <option selected value="">Selecione</option>
                <option></option>
                <option>Adm</option>
                <option>Usuario Comum</option>
                <option>Usuario Restrito</option>
                
              </select>
            </div>

            <div class="col-md-6">
              <label for="diretor" class="form-label">Nome de Usuario</label>
              <input type="text" class="form-control" id="diretor" name="diretor" placeholder="Ex.: Fernando Meirelles">
            </div>
            <div class="col-md-6">
              <label for="senhade_de_acesso" class="form-label">Senha de Acesso</label>
              <input type="password" class="form-control" id="senhade_de_acesso" name="senhade_de_acesso" placeholder="Ex.: Fernando Meirelles">
            </div>
            <div class="col-md-6">
              <label for="diretor" class="form-label">Confirmar Senha de Acesso</label>
              <input type="password" class="form-control" id="diretor" name="diretor" placeholder="Ex.: Fernando Meirelles">
            </div>
            <div class="d-flex gap-2 mt-4">
                                                          <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="button" class="btn btn-primary" onclick="fnValidacao()">Salvar Cadastro</button>
                
            </div>
    </form>

</main>
    
</body>
</html>