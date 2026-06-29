<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel ="stylesheet" href="css/style.css">
    
    
    <title>Cadastro de Produtos</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header class='' style="display:flex;justify-content: center;">
    <nav >
        <div class ='' style="display:flex;justify-content: center;">
            <div class="box_cinza_claro">
                <!-- //link para acessar -->
                <a class="box_letra" href="navegacao.php">
                Menu
                </a>
            </div>
            <div class="box_cinza_medio">
                <!-- //link para acessar -->
                <a class="box_letra" href="ordem_de_servico.php">
                Ordem de Serviços(OS)
                </a>
            </div>
        </div>
       <div class ='' style="display:flex;justify-content: center;">
            <div class="box_cinza_claro" >
                <!-- //link para acessar -->
                <a class="box_letra" href="acessar_aos_relatorios.php">
                Acessar aos Relatorios
                </a>
            </div>
            <div class="box_cinza_medio">
                <!-- //link para acessar -->
                <a class="box_letra" href="estoque_entrada.php">
                Entrada
                </a>
            </div>
            <div class="box_cinza_claro">
                <!-- //link para acessar -->
                <a class="box_letra" href="estoque_saida.php">
                Saida
                </a>
            </div>
        </div>    
    </nav>
</header>
    <main >
        <form action="slqCadastroProdutos.php" method="post">
            <div class="col-md-4 ">
                <label for="codigo_do_produto" class="form-label  ">Codigo do Produto</label>
                <input type="number" class="form-control s" id="codigo_do_produto" name="codigo_do_produto" placeholder="Ex.: 2024">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto" name="nome_do_produto"
                placeholder="Ex.: Cidade de Deus">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="fabricante" class="form-label">Fabricante</label>
                <input type="text" class="form-control s" id="fabricante" name="fabricante"
                placeholder="Ex.: Cidade de Deus">
            </div>
            <div class="col-md-6">
                <label for="peso_do_produto" class="form-label">Peso do Produto</label>
                <div class="input-group">
                    <span class="input-group-text">g</span>
                    <input type="number" class="form-control s" id="peso_do_produto" name="peso_do_produto" placeholder="0,000"
                step="0.001">
                </div>
            </div>
            <div class="col-md-6">
                <label for="altura_do_produto" class="form-label">Altura do Produto</label>
                <div class="input-group">
                    <span class="input-group-text">cm</span>
                    <input type="number" class="form-control s" id="altura_do_produto" name="altura_do_produto" placeholder="0,00"
                step="0.001">
                </div>
            </div>
            <div class="col-md-6">
                <label for="comprimento_do_produto" class="form-label">Comprimento do Produto</label>
                <div class="input-group">
                    <span class="input-group-text">cm</span>
                    <input type="number" class="form-control s" id="comprimento_do_produto" name="comprimento_do_produto" placeholder="0,00"
                step="0.01">
                </div>
            </div>
            
            <div class="d-flex gap-2 mt-4">                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn-primary s" onclick="fnValidacao()">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary s">Limpar</button>
            </div>
        </form>
    </main>
    
</body>
</html>