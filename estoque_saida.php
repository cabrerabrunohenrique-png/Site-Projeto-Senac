<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Entrada Saida</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header>

    <nav style =" display:flex">
        <!-- //espaço para cada titulo de navegacao -->
        <div class="box_amarelo">
             <!-- //link para acessar -->
            <a href="cadastro_de_produtos.php">
            Cadastro de Produto
            </a>
        </div>

        <div class="box_azul">
             <!-- //link para acessar -->
            <a class="box_azul_letra" href="navegacao.php">
            Menu
            </a>
        </div>
       
        <div class="box_azul_claro" >
             <!-- //link para acessar -->
            <a href="acessar_aos_relatorios.php">
            Acessar aos Relatorios
            </a>
        </div>
        <div class="box_verde">
             <!-- //link para acessar -->
            <a href="estoque_entrada.php">
            Estoque - Entrada
            </a>
        </div>
        <div class="box_vermelho">
             <!-- //link para acessar -->
            <a href="estoque_saida.php">
            Estoque - Saida
            </a>
        </div>
    </nav>
</header>

    <main >
        <form>
            
            <div class="col-md-4">
              <label for="data_entrada_produto" class="form-label">Data Entrada Produto</label>
              <input type="date" class="form-control" id="data_lancamento" name="data_entrada_produto">
            </div>
            <div class="col-md-4">
                <label for="codigo_do_produto_entrada" class="form-label">Codigo do Produto</label>
                <input type="number" class="form-control" id="codigo_do_produto_entrada" name="codigo_do_produto_entrada" placeholder="Ex.: 2024">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto_entrada" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome_do_produto_entrada" name="nome_do_produto_entrada"
                placeholder="Ex.: Cidade de Deus">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="quantidade_entrada" class="form-label">Quantidade</label>
                <input type="text" class="form-control" id="quantidade_entrada" name="quantidade_entrada"
                placeholder="Ex.: Cidade de Deus">
            </div>


            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Numero NF</label>
                <input type="number" class="form-control" id="numero_nf" name="numero_nf" placeholder="Ex.: 2024">
            </div>

           

            <div class="col-md-4">
                <label for="numero_nf" class="form-label">CPF da peça</label>
                <input type="number" class="form-control" id="numero_nf" name="numero_nf" placeholder="Ex.: 2024">
            </div>

            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Numero da OS</label>
                <input type="number" class="form-control" id="numero_nf" name="numero_nf" placeholder="Ex.: 2024">
            </div>

            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Situacao do Produto</label>
                <input type="number" class="form-control" id="numero_nf" name="numero_nf" placeholder="Ex.: 2024">
            </div>


            
            

           
    
            
            <div class="d-flex gap-2 mt-4">                              <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="button" class="btn btn-primary" onclick="fnValidacao()">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
            </div>
        </form>
    </main>
    


    
</body>
</html>