<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Ordem de Servico</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header>
    <nav >
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <!-- //link para acessar -->
                <a class="letraPretoAzul caixa" href="../navegacao.php">
                Menu
                </a>
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class ='' style="display:flex;justify-content: center;">
            
            <div style="width: 15px"> </div>
            <div class="" >
                <a class="letraFundoAzul caixa" href="../acessar_aos_relatorios.php">Acessar aos Relatorios
                </a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa" href="../estoque_entrada.php">Lançamento: Estoque ENTRADA de Produtos
                </a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa" href="../estoque_saida.php">Lançamento: Estoque SAIDA de Produtos</a>
            </div>
            <div style="width: 15px"> </div>
           
        </div>    
    </nav>

</header>

    <main >
        <div class=''style='height:10px'> </div>
        <div class='' style='display: flex; justify-content: center '>
            <h1 class=''style ='text-transform: uppercase' >Ordem de Serviço</h1>
        </div>
        <form>
            <div class="col-md-4">
                <label for="codigo_ordem_de_servico" class="form-label">Codigo Ordem de Servico(0S)</label>
                <input type="number" class="form-control s" id="codigo_ordem_de_servico" name="codigo_ordem_de_servico" placeholder="Ex.: 2024">
            </div>

            <div class="col-md-4">
                <label for="codigo_do_produto" class="form-label">Codigo do Produto</label>
                <input type="number" class="form-control s" id="codigo_do_produto" name="codigo_do_produto" placeholder="Ex.: 2024">
            </div>

            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto_os" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto_os" name="nome_do_produto_os"
                placeholder="Ex.: Cidade de Deus">
            </div>

           <div class="row g-3">
                <div class="col-12">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="text" class="form-control s" id="quantidade" name="quantidade"
                placeholder="Ex.: Cidade de Deus">
            </div>
    
            
            <div class="d-flex gap-2 mt-4">                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="button" class="btn btn-primary" onclick="fnValidacao()">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary ">Limpar</button>
            </div>
        </form>
    </main>
    


    
</body>
</html>