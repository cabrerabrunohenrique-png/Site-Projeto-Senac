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
    
    <title>Quantidade_saida</title>
</head>
<body class ="container bg-body-secondary">
<header class='' >
    <nav >
        <div class ="" style="display:flex;justify-content: space-between;">
            <div>
                <a class="letraFundoAzul caixa text-bg-success le fontemenu" href="../acessar_aos_relatorios.php">
                    Relatorios
                </a>
            </div>
            <div>
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href="quantidade_produto_entrada.php">
                    Quantidade de Entrada por Produto
                </a>
            </div>
           
           
        </div>
       
        <div class=''style='height:20px'> </div>
        <div style ='width: px;height:10px;' > </div>
        <main >
            <table class="fontemenu table ">
            <tr class=' text-center le'>
                
            <td>codigo Produto</td>
            <td>nome Produto</td>
            <td>quantidade Produto</td>
            
            </tr>
        </main>
    
        <?php
            $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
            if(!$conexao){
                die("<h3>Erro</h3>".mysqli_connect_error());
            }
        
            $sql = " select codigopeca,nomepeca, sum(quantidapeca) as quantidadetotal from tbsaidaestoque  group by codigopeca,nomepeca ";

          $resultado = mysqli_query($conexao,$sql);
                        
  
    
            if($resultado){
                             

                while($linha_resultado = mysqli_fetch_assoc($resultado))
                {
               
                    echo"<tr class ='text-center'>";
                
                    echo "<td> {$linha_resultado['codigopeca']} </td>";
                    echo "<td> {$linha_resultado['nomepeca']} </td>";

                    echo "<td> {$linha_resultado['quantidadetotal']} </td>";
                    
                    echo"</tr>";
                
                }
                mysqli_close($conexao);
            }
    ?>

    
</header>

    
</body>
</html>