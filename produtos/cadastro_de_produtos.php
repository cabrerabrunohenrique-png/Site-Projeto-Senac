<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <link rel ="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    
    <title>Cadastro de Produtos</title>
</head>
<body class ="container bg-body-secondary">
 
    
<!-- cabeça -->
<header class='' >
    <nav >
        <div class ="" style="display:flex;justify-content: space-between;">
            <div>
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php">
                    Menu
                </a>
            </div>
            <div>
                <a class='letraFundoAzul caixa text-bg-warning fontemenu le' href='atualizar_produtos.php'> Atualizar Informações do Produto</a>
            </div>
           
            <div>
                <a class="letraFundoAzul caixa text-bg-danger fontemenu le" href ='deletar_produto.php'> Deletar  Produtos</a>
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                               
                <a class="cp caixa  fontemenu" href='../listagem/listaProduto.php ' target="_blank">Lista de Produtos </a>
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class="os caixa fontemenu le" href="../ordem_de_servico/ordem_de_servico.php">Ordem de Servico(OS)
                </a>
            </div>
           
            <div style="width: 15px"> </div>
            <div class="" >
                <a class="ar caixa  fontemenu" href="../acessar_aos_relatorios.php">Acessar aos Relatorios
                </a>
            </div>
            <div style="width: 15px"> </div>
            
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa fontemenu le" href="../estoque_entrada.php">Lançamento: Estoque ENTRADA de Produtos</a>
            </div>
            <div style="width: 15px"> </div>
              <div class="">
                <a class="letraFundoAzul caixa fontemenu le" href="../estoque_saida.php">Lançamento: Estoque SAIDA de Produtos</a>
            </div>
            <div style="width: 15px"> </div>
         
        </div>    
    </nav>
    
</header>

    <main >
        <div class=''style='height:20px'> </div>       
        <div class='' style='display: flex; justify-content: center '>
            <h1 class='fontemenu'style ='text-transform: uppercase ' >Cadastro de produto</h1>
        </div>
        <div class=''style='height:20px'> </div>
        <form action="slqCadastroProdutos.php" method="post" onsubmit="return fnproduto(event)">
            <div class="col-md-4 ">
                <label for="codigo_do_produto" class="form-label  ">Codigo do Produto</label>
                <input type="number" class="form-control s" id="codigo_do_produto" name="codigo_do_produto" placeholder="Ex.: 2024">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto" name="nome_do_produto"
                placeholder="Ex.: Nome do Produto">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="fabricante" class="form-label">Fabricante</label>
                <input type="text" class="form-control s" id="fabricante" name="fabricante"
                placeholder="Ex.: Fabricante">
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
                <button type="submit" class="btn btn-primary s" ">Salvar</button>
                <button type="reset" class="btn btn-outline-secondary s">Limpar</button>
            </div>
        </form>
    </main>
    
</body>
<script src="../js/produtos.js"></script>
</html>