<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Acessar aos Relatorios</title>
</head>
<body class ="container">

<header> 
    <nav class="bg-body-secondary" >
         <div class="">
            <a class="letraPretoAzul caixa" href="../navegacao.php">
             Menu
            </a>
         </div>
        
    </nav>

</header> 
<div class=''style='height:10px'> </div>
<div class='' style='display: flex; justify-content: center '>
     <h1 class=''style ='text-transform: uppercase' >
        Relatorios
     </h1>
</div>
<div class=''style='height:10px'> </div>

    <main class="">

        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success" href="../listagem/lista_entra_estoque.php">Lista de Entrada de Produtos no Estoque</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa text-bg-success" href="../listagem/lista_saida_estoque.php">Lista de Saida de Produtos</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success" href="..listagem/lista_ordem_servico.php">Lista Ordem de Servico</a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa text-bg-success " href="../listagem/listaProduto.php">Lista de Produtos Cadastrado</a>
            </div>

        </div>


    </main>
    


    
</body>
</html>