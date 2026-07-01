<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Julius+Sans+One&family=Permanent+Marker&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sansation:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">


    <title>index</title>
</head>
<body class="s fundo" style=" " >
 
<main class="" >
    <a href ="listagem/listaProduto.php"> lista </a>

    <nav >
        <div class ="texto  box_cinza_claro" style ='text-transform: uppercase'>
            <a class="texto  " href="FormularioCadastroNovoUsuario.php">
            Cadastro Novo Usuario
            </a>
        </div>
        <div class='' style=" display: flex; justify-content: center;">
            <div class="box_cinza_medio">
                <form action="sqlLogin.php" method="post" onsubmit="return fnValidacao()">
                    <div class="col-md-6">
                        <label for="NomedeUsuario" class="form-label">Nome de Usuario</label>
                        <input type="text" class="form-control" id="NomedeUsuario" name="nome_de_usuario" 
                        placeholder ="Informe o nome de Usuario">
                    </div>
                    <div class="col-md-6">
                        <label for="SenhaAcesso" class="form-label">Senha de Acesso</label>
                        <input type="password" class="form-control" id="SenhaAcesso" name="senha_de_acesso"
                        placeholder ="Informe a senha de acesso">
                    </div>
                    
                        <div class='  centro'>
                        <button  class=" botaoAcessar  btn btn-primary" type="submit" >Acessar</button>
                        </div> 
                    </div>
                </form>          
            </div>
        </div>
    </nav>

</main>
    
</body>
<script src="js/validacao.js"></script>
</html>