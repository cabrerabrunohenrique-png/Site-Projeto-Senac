<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <title>index</title>
</head>
<body class="s" style=" " >
 
<main class="" >
    <nav >
        <div class ="s  box_cinza_claro">
            <a class=" fm " href="FormularioCadastroNovoUsuario.php">
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