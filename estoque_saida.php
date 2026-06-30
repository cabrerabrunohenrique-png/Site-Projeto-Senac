<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>saida</title>
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
            <div class="">
                <a class="letraFundoAzul caixa" href="../ordem_de_servico.php">Ordem de Servico(OS)
                </a>
            </div>
           
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
            
            
            <div>
                <a class='letraFundoAzul caixa' href='produtos/atualizar_produtos.php'> Atualizar Informações do Produto</a>
            </div>
            <div style="width: 15px"> </div>
            <div>
                <a class="letraFundoAzul caixa" href ='produtos/deletar_produto.php'> Deletar  Produtos</a>
            </div>
        </div>    
    </nav>

   
</header>
<div class=''style='height:10px'> </div>
<div class='' style='display: flex; justify-content: center '>
    <h1 class=''style ='text-transform: uppercase' >Estoque Saida de Produtos</h1>
</div>

    <main >
        <form>
            <div class="col-md-4">
                <label for="" class="form-label">Numero Ordem de Servico(OS)</label>
                <input type="number" class="form-control s" id="" name="codigo_do_produto_entrada">
            </div>
            
            <div class="col-md-4">
              <label for="data_entrada_produto" class="form-label">Data Saida Produto</label>
              <input type="date" class="form-control s" id="data_lancamento" name="data_entrada_produto">
            </div>
            <div class="col-md-4">
                <label for="codigo_do_produto_entrada" class="form-label">Codigo do Produto</label>
                <input type="number" class="form-control s" id="codigo_do_produto_entrada" name="codigo_do_produto_entrada">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto_entrada" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto_entrada" name="nome_do_produto_entrada">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="quantidade_entrada" class="form-label">Quantidade</label>
                <input type="text" class="form-control s" id="quantidade_entrada" name="quantidade_entrada">
            </div>


            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Numero NF</label>
                <input type="number" class="form-control s" id="numero_nf" name="numero_nf" >
            </div>

           

            <div class="col-md-4">
                <label for="numero_nf" class="form-label">CPF da peça</label>
                <input type="number" class="form-control s" id="numero_nf" name="numero_nf">
            </div>

            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Numero da OS</label>
                <input type="number" class="form-control s" id="numero_nf" name="numero_nf">
            </div>

            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Situacao do Produto</label>
                <input type="number" class="form-control s" id="numero_nf" name="numero_nf">
            </div>


            
            

           
    
            
            <div class="d-flex gap-2 mt-4">                              <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="button" class="btn btn-primary" onclick="fnValidacao()">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
            </div>
        </form>
    </main>
    


    
</body>
</html>