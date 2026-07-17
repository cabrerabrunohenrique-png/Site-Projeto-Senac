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
    $nomeBanco = $listaCodigoProduto->listanome();
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Ordem de Servico</title>
</head>
<body class ="container">
 

<header>
    <nav >
        <div class ='' style="display:flex;justify-content: space-around;">
            <div class="">
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php" >Menu</a>
            </div>
                 
            <div class="">
                <a class="ar caixa fontemenu" href='../listagem/lista_ordem_servico.php' target="_blank">Lista Ordem de Servico(OS)</a>                
            </div>
            
            <div class="" >
                <a class="ar caixa  fontemenu text-bg-warning" href="../ordem_de_servico/atualizar_os.php">Editar Ordem de Servico(OS)
                </a>
            </div>
            
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa fontemenu text-bg-danger le" href="../ordem_de_servico/excluir_os.php">Excluir Ordem de Servico(OS)
                </a>
            </div>
        </div>    
    </nav>

</header>

    <main >
        <div class=''style='height:20px'> </div>
        <div class='fontemenu' style='display: flex; justify-content: center '>
            <h1 class=''style ='text-transform: uppercase' >Cadastro Ordem de Serviço(OS)</h1>
        </div>
        <div class=''style='height:20px'> </div>
        <form action="slqCadastroOS.php" method="post" onsubmit="return fnproduto(event)" >
            <div class="row g-3 ">
                <div class="col-4">
                    <label for="data" class="form-label">Data</label>
                    <input type="date" class="form-control s" id="data" name="data">
                </div>
                <div class="col-md-4">
                    <label for="codigo_ordem_de_servico" class="form-label">Codigo Ordem de Servico(0S)</label>
                    <select id="codigo_ordem_de_servico" class="form-control s" name="codigo_ordem_de_servico" >

                                    //GERA NUMERO ALEATORIO  
                     <?php $codigo = random_int(1,9999); ?>
                    
                        <option value ="<?=$codigo;?>"> <?= $codigo;?></option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="codigo_do_produto" class="form-label">Codigo do Produto</label>
                    <select class="form-control s" id ="codigo_do_produto" name="codigo_do_produto">
                        <?php foreach ($codigosDoBanco as $codigo):?>
                            <option class="form-label" value="<?php echo trim($codigo);?>"><?php echo trim($codigo);?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                
                    <div class="col-4">
                        <label for="nome_do_produto" class="form-label">Nome do Produto</label>
                        <select class="form-control s" id="nome_do_produto" name="nome_do_produto">
                            <?php foreach($nomeBanco as $nome): ?>
                                <option value="<?php echo($nome);?>"><?php echo($nome) ;?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
               

               
                    <div class="col-4">
                        <label for="quantidade_entrada" class="form-label">Quantidade</label>
                        <input type="number" class="form-control s" id="quantidade_entrada" name="quantidade_entrada"placeholder="Ex.: 2004">
                    </div>
               
    
            
            <div class=" gap-2 mt-4 " style='display: flex; justify-content: center '>                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn-success" >Salvar Cadastro</button>
                <button type="reset" class="btn btn-outline-secondary ">Limpar</button>
            </div>
        </form>
    </main>
    <div class=''style='height:50px'> </div>

    <nav>
         <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class="cp caixa1 fontemenu le" href="../produtos/cadastro_de_produtos.php">Cadastro de Produtos
                </a>
            </div>
           
            <div style="width: 15px"> </div>
            <div class="" >
                <a class="ar caixa1  fontemenu" href="../acessar_aos_relatorios.php">Acessar aos Relatorios
                </a>
            </div>
            <div style="width: 15px"> </div>
            
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa1 fontemenu text-bg-info  le" href="../estoque_entrada.php">Lançamentos -Entrada e Saida</a>
            </div>
         
         
        </div>    
    </nav>
    


    
</body>
<script src="../js/produtos.js"></script>
</html>