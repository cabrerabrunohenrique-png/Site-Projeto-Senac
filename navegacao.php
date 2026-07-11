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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    
    <link rel ="stylesheet" href="../css/style.css">

    <title>Navegacao</title>
</head>
<body class="container" style='background-color: #F7F7F7'>


    <nav class ="">
       

            <div class=" " style='' >
                 <a class="letraPretoAzul caixa text-bg-danger fontemenu le" href="index.php">Sair do Sistema</a>
            </div>
          
    </nav> 
    <div style="height: 15px"></div>

    <div  style ='display:flex; justify-content: center; color: #334E5C'>
        <h1 class='fontemenu'>
            Menu de Navegação
        </h1>
    </div>
    <div style="height: 15px"> </div>


    <main class=''>
        <!--a-->
        <div class='' style ='display:flex; justify-content: center'>
            <!--b-->
            <div class=''>
                <!--c-->
                <div class=''>
                    <a class='cp caixa  fontemenu ' href="produtos/cadastro_de_produtos.php">Cadastro de Produtos</a>
                </div>
                 <div style="height: 15px"> </div>
                <div class=''>
                    <a class='os caixa fontemenu' href="ordem_de_servico/ordem_de_servico.php">Ordem de Servico(OS)</a>
                </div>

            </div>
            <div style="width: 15px"> </div>
            <div class=''>
                <!--c-->
                <div class=''>
                    <a class='ar caixa  fontemenu' href="acessar_aos_relatorios.php">Acessar aos Relatorios</a>
                </div>
               <div style="height: 15px"> </div>
                <div class=''>
                    <a class='letraFundoAzul caixa text-bg-info fontemenu le ' href="estoque_entrada.php">Lançamento: Estoque ENTRADA de Produtos</a>
                </div>
            </div>
            
        </div>
        
          <div style="height: 15px"> </div>
        <div class='' style ='display:flex; justify-content: center' >
            <div class=''>
                <a class='letraFundoAzul caixa fontemenu le' href ='estoque_saida.php'>Lançamento: Estoque SAIDA de Produtos </a>
            </div>
        </div>


    </main>

    
</body>
</html>