<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php

require_once "../class/class.php";

$listaCodigoProduto = new listaProdutos();

$codigosDoBanco = $listaCodigoProduto->listaSuspensa();
?>


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
    
    
    <title>Atualizar Produtos</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header class='' >
    <nav >
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <!-- //link para acessar -->
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php">
                Menu
                </a>
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class ='' style="display:flex;justify-content: center;">
            
           
            
        </div>    
    </nav>
</header>
<div class=''style='height:10px'> </div>
<div class='fontemenu' style='display: flex; justify-content: center '>
     <h1 class=''style ='text-transform: uppercase' >Atualizar Produto</h1>
</div>
    <main >
        <form action="sqlEditarProduto.php" method="post" onsubmit="return fnproduto(event)">
         <div class="col-md-6 ">
                    <label for="data" class="form-label">Data Alteracao</label>
                    <input type="date" class="form-control s" id="data" name="data">
                    
                </div>    
        
        
        <div class="col-md-4 ">
                <label for="codigo_do_produto" class="form-label  " name ="codigo_do_produto">Codigo do Produto</label>
                <select class="form-control s " id='codigo_do_produto' name='codigo_do_produto'>
                     <?php foreach ($codigosDoBanco as $codigo):?>
                    <option  value="<?php echo $codigo;
                    ?>" class="form-label"><?php echo $codigo;
                    ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control s" id="nome_do_produto" name="nome_do_produto " >
            </div>
            <div class="row g-3">
                <div class="col-12">
                <label for="fabricante" class="form-label">Fabricante</label>
                <input type="text" class="form-control s" id="fabricante" name="fabricante"placeholder="Ex.: Papel Ltda">
            </div>

             <div class="col-md-6">
                    <label for="variavel" class="form-label">Variavel do Produto</label>
                    <div class="input-group">
                        
                        <input type="number" class="form-control s" id="variavel" name="variavel" placeholder="1">
                    </div>
                    
                </div>
                <div class="col-md-6">
                
                    <label for="familia" class="form-label">Familia</label>
                    <input type="text" class="form-control s" id="familia" name="familia"
                    placeholder="Ex.: Pano">
                </div>
            </div> 
            <div style='display: flex;' class=' gap-3'>
                <div class="col-md-6">
                    <label for="categoria" class="form-label">Categoria </label>
                    <input type="text" class="form-control s" id="categoria" name="categoria"
                    placeholder="Ex.: Eletrônicos">
                </div>
                <div class="col-md-6">
                    <label for="preco" class="form-label">Preço por produto</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" class="form-control s" id="preco" name="preco" placeholder="0,00"
                    step="0.01">
                    </div>
                </div>
            </div>
                        
            <div class="d-flex gap-2 mt-4">                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn-primary s">Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary s">Limpar</button>
            </div>
        </form>
    </main>
    
</body>
<script src="../js/produtos.js"></script>
</html>