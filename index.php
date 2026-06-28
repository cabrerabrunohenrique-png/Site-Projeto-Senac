<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <title>index</title>
</head>
<body class="" style="border: 1px solid blue; display: flex; justify-content: center;" >
 
<!-- corpo -->
<main class="" style="border: 1px solid red; " >

    <!-- //menu de navegação -->
    <nav >
        <!-- //espaço para cada titulo de navegacao -->
        <div class ="box_cinza_claro">
             <!-- //link para acessar -->
            <a class="box_letra" href="FormularioCadastroNovoUsuario.php">
            Cadastro Novo Usuario
            </a>
        </div>
   

   
        <div class="box_cinza_medio">
            <form action="sqlLogin.php" method="post" onsubmit="return fnValidacao()">
                <div class="col-md-6">
                    <label for="NomedeUsuario" class="form-label">Nome de Usuario</label>
                    <input type="text" class="form-control" id="NomedeUsuario" name="nome_de_usuario">
                </div>
                <div class="col-md-6">
                    <label for="SenhadeAcesso" class="form-label">Senha de Acesso</label>
                    <input type="password" class="form-control" id="SenhadeAcesso" name="senha_de_acesso">
                </div>
                
                    <div class=' mb-3 centro'>
                    <button  class=" btn btn-primary" type="submit" >Acessar</button>
                    </div>
                </div>
            </form>          
        </div>
    </nav>

</main>
    
</body>
<script src="js/validacao.js"></script>
</html>