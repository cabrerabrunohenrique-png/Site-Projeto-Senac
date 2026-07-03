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
                <a class="letraFundoAzul caixa text-bg-success le" href="../listagem/lista_entra_estoque.php">Lista de Entrada de Produtos no Estoque</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa text-bg-success le" href="../listagem/lista_saida_estoque.php">Lista de Saida de Produtos</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success le" href="../listagem/lista_ordem_servico.php">Lista Ordem de Servico</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success le " href="../listagem/listaProduto.php">Lista de Produtos Cadastrado</a>
            </div>

        </div>

        <div>
            <a class="letraFundoAzul caixa text-bg-success le" href='../produtos/quantidade_produto_entrada.php'>Quantidade Lançado Por Produto</a>
        </div>
        <div style="height: 15px"> </div>   
        <div>
            <a class="letraFundoAzul caixa text-bg-success le" href='../produtos/quantidade_produto_saida.php'>Quantidade Saida Por Produto</a>
        </div>


    </main>
    


    
</body>
</html>