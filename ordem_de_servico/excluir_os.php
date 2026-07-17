<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Excluir</title>
</head>
<body class ="container">
 

<header>
    <nav >
        <div class ='' style="display:flex;justify-content: space-between;">
        <div>
            <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php">Menu</a>
            
        </div>
        
            <div class="">
            <a class="ar caixa fontemenu" href='../listagem/lista_ordem_servico.php' target="_blank">Lista Ordem de Servico(OS)</a>                
            </div>
        
        
  
            
          
            <div class="" >
                <a class="ar caixa  fontemenu text-bg-warning" href="atualizar_os.php">Editar Ordem de Servico(OS)
                </a>
            </div>
            
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa fontemenu le os" href="ordem_de_servico.php">Voltar-Ordem de Servico(OS)
                </a>
            </div>
           
           
        </div>    
    </nav>

</header>

    <main class=''style=''>
        <div class=''style='height:20px'> </div>
        <div class='fontemenu' style='display: flex; justify-content: center '>
            <h1 class=''style ='text-transform: uppercase' >Excluir Ordem de Serviço</h1>
        </div>
        <div class=''style='height:20px'> </div>
        <form action="sqlexcluir_os.php" method="post" onsubmit="return fnproduto(event)" >
            <div class='' style='display: flex; justify-content: center '>
                <div class="col-md-4 " >
                    <label for="codigo_ordem_de_servico" class="form-label">Codigo Ordem de Servico(0S)</label>
                    <input type="number" id="codigo_ordem_de_servico" class="form-control s" name="codigo_ordem_de_servico">
                </div>
            </div>  
            <div class='' style='display: flex; justify-content: center '>
                <div class="d-flex gap-2 mt-4">                                                                     
                    <button type="submit" class="btn btn-danger" >Excluir</button>
                    <button type="reset" class="btn btn-outline-secondary ">Limpar</button>
                </div>
            </div>
        </form>
    </main>
    


    
</body>
<script src="../js/produtos.js"></script>
</html>