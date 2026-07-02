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
    
    <title>Quantidade</title>
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
       
        <div class=''style='height:20px'> </div>
        <div style ='width: px;height:10px;' > </div>
        <main >
            <table class="table ">
            <tr class=''>
                
                <td>codigoProduto</td>
            <td>nomeProduto</td>
            <td>quantidadeProduto</td>
            
            </tr>
        </main>
    
        <?php
            $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
            if(!$conexao){
                die("<h3>Erro</h3>".mysqli_connect_error());
            }
        
            $sql = " select codigoProduto,nomeProduto, sum(quantidadeproduto) as quantidadetotal from tbentradaestoque  group by codigoProduto,nomeProduto ";

          $resultado = mysqli_query($conexao,$sql);
                        
  
    
            if($resultado){
                             

                while($linha_resultado = mysqli_fetch_assoc($resultado))
                {
               
                    echo"<tr class =''>";
                
                    echo "<td> {$linha_resultado['codigoProduto']} </td>";
                    echo "<td> {$linha_resultado['nomeProduto']} </td>";

                    echo "<td> {$linha_resultado['quantidadetotal']} </td>";
                    
                    echo"</tr>";
                
                }
                mysqli_close($conexao);
            }
    ?>

    
</header>

    
</body>
</html>