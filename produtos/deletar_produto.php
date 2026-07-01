<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel ="stylesheet" href="../css/style.css">
    
    
    <title>Deletar Produtos</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header class='' >
   
</header>
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
    </div>    
    <main >
        <div class=''style='height:10px'> </div>
        <div class='' style='display: flex; justify-content: center '>
            <h1 class=''style ='text-transform: uppercase' >Deletar Produto</h1>
        </div>
        <form action="sqlExcluirProdutos.php" method="post">
            <div class="col-md-4 ">
                <label for="codigo_do_produto" class="form-label  ">Codigo do Produto</label>
                <input type="number" class="form-control s" id="codigo_do_produto" name="codigo_do_produto">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto" name="nome_do_produto">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="fabricante" class="form-label">Fabricante</label>
                <input type="text" class="form-control s" id="fabricante" name="fabricante"
                placeholder="">
            </div>
           
            
            <div class="d-flex gap-2 mt-4">                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn-primary s" onclick="fnValidacao()">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary s">Limpar</button>
            </div>
        </form>
    </main>
    
</body>
</html>