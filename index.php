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

    <link rel ="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <title>index</title>
</head>
<body class="container" style=" " >
 

<main class="" >

    
    <nav style=" display: flex; justify-content: space-between;" >
        <div class ="" style ='text-transform: uppercase'>
            <a class='letraFundoAzul caixa text-bg-info fontemenu le' href="FormularioCadastroNovoUsuario.php">
            Cadastro Novo Usuario
            </a>
        </div>
       
        <div class="">
          <a class="letraFundoAzul caixa text-bg-warning fontemenu le " href="atualizar.php">Atualizar Cadastro</a>
        </div>
        

        </div>
        <div class="">
          <a class="letraFundoAzul caixa text-bg-danger fontemenu le " href="deletar.php">Deletar Cadastro</a>
          </div>
      </div>
        
    </nav>
    <div style='height:30px;' ></div>
        <div class='' style=" display: flex; justify-content: center;">
           
            <form class="  " action="sqlLogin.php" method="post" onsubmit="return fnValidacao()">
                <div class=' ar fontemenu' style='height:100px; width:500px;'>
                    <label for="NomedeUsuario" class="">Nome de Usuario</label>
                    <div style='width:50px'></div>
                    <input style='width:250px; height:30px;' type="text" class="" id="NomedeUsuario" name="nome_de_usuario" 
                        placeholder ="Informe o nome de Usuario">
                </div>
                <div class='m ar fontemenu' style='height:100px; width:500px;'>
                    <label for="SenhaAcesso" class="">Senha de Acesso</label>
                     <div style='width:50px'></div>
                     <input style='width:250px; height:30px;' type="password" class="" id="SenhaAcesso" name="senha_de_acesso"
                        placeholder ="Informe a senha de acesso">
                    </div>
                    <div class='m ar fontemenu' style='height:100px; width:500px;'>
                        <button  class=" botaoAcessar  btn btn-primary" type="submit" >Acessar</button>
                    </div> 
                </div> 
                   
            </form>          
         
        </div>
    

</main>
    
</body>
<script src="js/validacao.js"></script>
</html>