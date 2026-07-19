<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:index.php');
    exit;

}

?>

<?php
    require_once "class/class.php";
    $listaCodigoProduto = new listaProdutos();
    $codigosDoBanco = $listaCodigoProduto->listaSuspensa();
    $nomebanco = $listaCodigoProduto->listanome();
    $listaos = $listaCodigoProduto->listaos();
    

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Estoque Saida</title>

   
</head>
<body class ="container">
 
<!-- cabeça -->
<header>
     <nav >
        <div class ="bg-body-secondary" style="display:flex;justify-content: space-between;">
            <div>
            <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php">Menu</a>
            </div>
             <div class="">
                <a class="letraFundoAzul caixa fontemenu le text-bg-success" href="../estoque_entrada.php">Lançamento: Estoque ENTRADA de Produtos
                </a>
            </div>
       
            <div>
                <a class="letraFundoAzul caixa fontemenu le ar text-bg-primary" href="../listagem/lista_saida_estoque.php" onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;" >Lista Saida do Estoque</a>
            </div>          
            
           
              
            
        </div>    
    </nav>

   
</header>
<div class=''style='height:20px'> </div>

<div class='fontemenu' style='display: flex; justify-content: center '>
    <h1 class=''style ='text-transform: uppercase' >Estoque Saida de Produtos</h1>
</div>
<div class=''style='height:20px'> </div>
    <main >
        <form action="sqlSaidaEstoque.php" method="post"onsubmit="return fnproduto(event)" >
            <div style='display:flex;justify-content: space-between'>
                <div class="col-3">
                    <label for="os" class="form-label">Numero Ordem de Servico(OS)</label>
                     <select class="form-control s" id="os" name="os">
                        <?php foreach($listaos as $os) :?>
                        <option><?php echo($os);?></option>
                        <?php endforeach;?>

                    </select>
                </div>
                
                <div class="col-3">
                <label for="data" class="form-label">Data Saida Produto</label>
                <input type="date" class="form-control s" id="data" name="data">
                </div>
                <div class="col-3">
                    <label for="codigo_do_produto" class="form-label">Codigo do Produto</label>
                <select id ="codigo_do_produto" class="form-control s" name='codigo_do_produto'>
                        <?php foreach ($codigosDoBanco as $codigo):?>
                        <option value="<?php echo $codigo;
                        ?>" class="form-label"><?php echo $codigo;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div style='display:flex;justify-content: space-between'>
                <div class="col-3">
                    <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                    <select  class="form-control s" id="nome_do_produto" name="nome_do_produto">
                        <?php foreach($nomebanco as $nome):?>
                            <option value ="<?php echo($nome) ;?>"><?php echo($nome) ;?></option>
                        <?php endforeach ;?>
                    </select>
                </div>
                
                <div class="col-3">
                    <label for="quantidade_entrada" class="form-label">Quantidade</label>
                    <input type="number" class="form-control s" id="quantidade_entrada" name="quantidade_entrada">
                </div>


                <div class="col-3">
                    <label for="numero_nf" class="form-label">Numero NF</label>
                    <input type="number" class="form-control s" id="numero_nf" name="numero_nf" >
                </div>
            </div>
            <div class="gap-2 mt-4" style='display:flex;justify-content: center'>                              <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn-success"> Salvar Saida Produto do Estoque  </button>
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
            </div>
        </form>
    </main>
    


    
</body>
<script src="../js/produtos.js"></script>
</html>