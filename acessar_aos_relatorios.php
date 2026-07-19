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

    <link rel ="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">

    <title>Acessar aos Relatorios</title>
</head>
<body class ="container">

<header> 
    <nav class="bg-body-secondary" >
         <div class="">
            <a class="letraPretoAzul caixa text-bg-info fontemenu le" href="../navegacao.php">
             Menu
            </a>
         </div>
    </nav>

    

</header> 
<div class=''style='height:10px'> </div>
<div class='' style='display: flex; justify-content: center '>
     <h1 class='fontemenu'style ='text-transform: uppercase' >
        Relatorios
     </h1>
</div>
<div class=''style='height:10px'> </div>

    <main class="fontemenu">

        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success le" href="../listagem/lista_entra_estoque.php" onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;" >Lista de Entrada de Produtos no Estoque</a>
                <a class="letraFundoAzul   le" href='pdf_entrada_produto.php'>Pdf</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa text-bg-success le" href="../listagem/lista_saida_estoque.php" onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;">Lista de Saida de Produtos</a>
                <a class="letraFundoAzul   le" href="../pdf/pdf_saida_produto.php">PDF</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success le" href="../listagem/lista_ordem_servico.php" onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;">Lista Ordem de Servico</a>
                <a class="letraFundoAzul   le" href="../pdf/pdf_relacao_ordem.php">PDF</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success le " href="../listagem/listaProduto.php" onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;" >Lista de Produtos Cadastrado</a>
                <a class="letraFundoAzul   le" href="../pdf/pdf_relacao_produto.php">PDF</a>
            </div>

        </div>

        <div>
            <a class="letraFundoAzul caixa text-bg-success le" href='../produtos/quantidade_produto_entrada.php' target="_blank">Quantidade Lançado Por Produto</a>
        </div>
        <div style="height: 15px"> </div>   
        <div>
            <a class="letraFundoAzul caixa text-bg-success le" href='../produtos/quantidade_produto_saida.php' target="_blank">Quantidade Saida Por Produto</a>
        </div>
        <div style="height: 15px"> </div>
        <div>
            <a class="letraFundoAzul caixa text-bg-success le" href='../produtos/quantidade_estoque_atual.php' target="_blank">Estoque Atual</a>
        </div>

    </main>
    <div class=''style='height:50px'> </div>
     <nav>
         <div class ='bg-body-secondary' style="display:flex;justify-content: space-between;">
            <div class="">
                <a class="os caixa1 fontemenu le" href="../ordem_de_servico/ordem_de_servico.php">Ordem de Servico(OS)
                </a>
            </div>
           
            
            <div class="" >
                <a class="cp caixa1  fontemenu" href="../produtos/cadastro_de_produtos.php">Cadastro de Produtos</a>
            </div>
            
            <div class="">
                <a class="letraFundoAzul caixa1 fontemenu text-bg-info  le" href="../estoque_entrada.php">Lançamentos -Entrada e Saida</a>
            </div>
         
         
        </div>    
    </nav>
    


    
</body>
</html>