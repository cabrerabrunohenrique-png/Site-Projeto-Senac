<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

require_once "../class/class.php";
$lista = new listaProdutos();
$listaproduto = $lista -> listaSuspensa();
$lista_nome_produto = $lista -> listanome();
$lista_responsavel = $lista -> vendedor();

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
    <nav class=''style="display:flex;justify-content: space-between">
        
            <div>
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="../navegacao.php">Menu</a>
            </div>
       
            <div class="">
                
                <a class="letraFundoAzul caixa fontemenu le os" href="ordem_de_servico.php">Voltar-Ordem de Servico(OS)
                </a>
            </div>
            
            <div class="">
                <a class="letraFundoAzul caixa fontemenu text-bg-danger le" href="excluir_os.php">Excluir Ordem de Servico(OS)</a>
            </div>
             <div class="">
                <a class="ar caixa fontemenu text-bg-primary" href='../listagem/lista_ordem_servico.php' onclick="window.open(this.href, 'popup', 'width=600,height=400'); return false;">Lista Ordem de Servico(OS)</a>                
            </div>
           
        
    </nav>

</header>

    <main >
        <div class=''style='height:50px'> </div>
        <div class='fontemenu' style='display: flex; justify-content: center '>
            <h1 class=''style ='text-transform: uppercase' >Atualizar Ordem de Serviço</h1>
        </div>
        <div class=''style='height:50px'> </div>
        <form action="sqlatualizaros.php" method="post" onsubmit="return fn6(event)" >
            <div class="" style='display:flex; justify-content: space-between'>
                 <div class="col-3">
                    <label style='display:flex; justify-content: center' for="data" class="form-label">Data Atualizacao</label>
                    <input type="date" class="form-control s" id="data" name="data">
                </div>
                <div class="col-3">
                   <label style='display:flex; justify-content:center' for="codigo_ordem_de_servico" class="form-label">Codigo Ordem de Servico(0S)</label>
                    <input type="number" id="codigo_ordem_de_servico" class="form-control s" name="codigo_ordem_de_servico" >
                    <option value =""> </option>
                    </select>
                </div>
                <div class="col-3">
                    <label style='display:flex; justify-content:center' for="codigo_do_produto" class="form-label">Codigo do Produto</label>
                    <select type="number" class="form-control s" id ="codigo_do_produto" name="codigo_do_produto">
                        <?php foreach($listaproduto as $produto): ?>
                            <option value="<?php echo($produto); ?>"><?php echo($produto);?> </option>
                        <?php endforeach;?>
                    </select>    
                </div>
            </div>
            <div class=" " style='display:flex;justify-content: space-between'>
                <div class="col-3">
                    <label style='display:flex; justify-content:center' for="nome_do_produto" class="form-label">Nome do Produto</label>
                    <select type="text" class="form-control s" id="nome_do_produto" name="nome_do_produto">
                        <?php foreach($lista_nome_produto as $nomeProduto): ?>
                            <option value="<?php echo($nomeProduto);?>"><?php echo($nomeProduto);?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="col-3">
                    <label style='display:flex;justify-content:center' for="quantidade_entrada" class="form-label">Quantidade</label>
                    <input type="number" class="form-control s" id="quantidade_entrada" name="quantidade_entrada">
                </div>
                <div class="col-3">
                    <label style='display:flex;justify-content:center' for="responsavelb" class="form-label">Responsavel</label>
                    <select type="" class="form-control s" id="responsavelb" name="responsavelb">
                        <?php foreach($lista_responsavel as $responsavel): ?>
                        <option value="<?php echo($responsavel); ?>"><?php echo($responsavel); ?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div style='height:20px' ></div>
            <div class=" gap-2 mt-4" style='display:flex;justify-content:center'>                                                            <!-- COMANDO PARA CHAMAR O CLIK-->          
                <button type="submit" class="btn btn text-bg-warning" >Salvar Atualização</button>
                <button type="reset" class="btn btn-outline-secondary ">Limpar</button>
            </div>
        </form>
    </main>
    


    
</body>
<script src="../js/produtos.js"></script>
</html>