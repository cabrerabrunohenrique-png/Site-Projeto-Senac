


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
     
      
              
       
      </div>
    </nav>
</header>

<div style='height:20px'></div>
 <main>
    <div class="centro " style='display: flex; justify-content: center '>
    <h1 class="fontemenu">Cadastro Novo Usuario</h1>
    </div>
    <div style='height:30px;' ></div>
    <div class='' style=" display: flex; justify-content: center;">
        <form class="  " action="sql/sqlAutorizacaoCadastroUsuario.php" method="post" onsubmit="return fnValidacao()">
            <div class=' ar fontemenu' style='height:100px; width:500px;'>
                <label for="NomedeUsuario" class="">Nome de Usuario</label>
                <div style='width:50px'></div>
                <input style='width:250px; height:30px;' type="text" class="" id="NomedeUsuario" name="NomedeUsuario" 
                placeholder ="Informe o nome de Usuario">
            </div>
            <div class='m ar fontemenu' style='height:100px; width:500px;'>
                <label for="SenhaAcesso" class="">Senha de Acesso</label>
                    <div style='width:50px'></div>
                    <input style='width:250px; height:30px;' type="password" class="" id="SenhaAcesso" name="SenhaAcesso"
                    placeholder ="Informe a senha de acesso">
                </div>
                <div class='m ar fontemenu' style='height:100px; width:500px;'>
                     <button  class=" botaoAcessar  btn btn-primary" type="submit" >Acessar</button>
                </dv>
            </div> 
                             
        </form>          
         
    </div>



</main>
</body>
<script src="js/validacao.js"></script>
</html>