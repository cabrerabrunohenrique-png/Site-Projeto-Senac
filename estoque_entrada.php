<?php
    require_once "class/class.php";
    $listaCodigoProduto = new listaProdutos();
    $codigosDoBanco = $listaCodigoProduto->listaSuspensa();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel ="stylesheet" href="../css/style.css">

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Entrada</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header>
    <nav >
        <div>
            <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php">Menu</a>
        </div>
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class='letraFundoAzul caixa fontemenu le' href="../listagem/lista_entra_estoque.php">Lista Entrada Estoque </a>
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class="os caixa fontemenu" href="ordem_de_servico/ordem_de_servico.php">Ordem de Servico(OS)
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
                <a class="letraFundoAzul caixa fontemenu le text-bg-danger" href="../estoque_saida.php">Lançamento: Estoque SAIDA de Produtos</a>
            </div>
           
            <div style="width: 15px"> </div>
            <div>
                <a class="cp caixa  fontemenu" href ="../produtos/cadastro_de_produtos.php"> Cadastro de Novos Produtos</a>
            </div>
        </div>    
    </nav>

</header>

<div class=''style='height:20px'> </div>
<div class='fontemenu' style='display: flex; justify-content: center '>
    <h1 class=''style ='text-transform: uppercase' >Estoque Entrada de produto</h1>
</div>
<div class=''style='height:20px'> </div>
    <main >
        <form action="sqlEntradaEstoque.php" method="post" onsubmit="return fnproduto(event)">
            <div class="col-md-4">
                <label for="codigo_do_produto_entrada" class="form-label">Codigo do Produto</label>
                <select class="form-control s" id ="codigo_do_produto">
                     <?php foreach ($codigosDoBanco as $codigo):?>
                    <option value="<?php echo $codigo;
                    ?>" class="form-label"><?php echo $codigo;
                    ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto" name="nome_do_produto_entrada"
                placeholder="Ex.: Nome do Produto">
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="quantidade_entrada" class="form-label">Quantidade</label>
                <input type="number" class="form-control s" id="quantidade_entrada" name="quantidade_entrada"
                placeholder="Ex.: 2004">
            </div>


            <div class="col-md-4">
                <label for="numero_nf" class="form-label">Numero NF</label>
                <input type="number" class="form-control s" id="numero_nf" name="numero_nf" placeholder="Ex.: 2024">
            </div>

             <div class="col-md-4">
              <label for="data" class="form-label">Data Entrada Produto</label>
              <input type="date" class="form-control s" id="data" name="data_entrada_produto">
            </div>

            
            

           
    
            
            <div class="d-flex gap-2 mt-4">                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn-primary" onclick="fnValidacao()">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
            </div>
        </form>
    </main>
    


    
</body>
<script src="../js/produtos.js"></script>
</html>