<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel ="stylesheet" href="../css/style.css">
    <title>listagem_ordem_servico</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header>
    <nav >
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <!-- //link para acessar -->
                <a class="letraPretoAzul caixa" href="../ordem_de_servico/ordem_de_servico.php">
                Voltar
                </a>
            </div>
        </div>
        <div style="height: 15px"></div>
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <a class="letraFundoAzul caixa" href="../ordem_de_servico/ordem_de_servico.php">Ordem de Servico(OS)
                </a>
            </div>
           
            <div style="width: 15px"> </div>
           
            <div style="width: 15px"> </div>
            <div class="">
                <!-- //link para acessar -->
                <a class="letraFundoAzul caixa" href="../estoque_entrada.php">Lançamento: Estoque ENTRADA de Produtos
                </a>
            </div>
            <div style="width: 15px"> </div>
            <div class="">
                <a class="letraFundoAzul caixa" href="../estoque_saida.php">Lançamento: Estoque SAIDA de Produtos</a>
            </div>
            
        </div>    
    </nav>

    
</header>
<div class=''style='height:10px'> </div>
<div class='' style='display: flex; justify-content: center '>
     <h1 class=''style ='text-transform: uppercase' >Relação de Ordem de Servios(OS)</h1>
</div>
<div style ='width: px;height:10px;' > </div>


    <main >

    <table class="table ">
        <tr class=''>
            <td class =''>codigoOS</td>
            <td>codigoProduto</td>
           <td>nomeProduto</td>
           <td>quantidadeProduzida</td>
                                  
        </tr>
       
    </main>
    
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
        if(!$conexao){
            die("<h3>Erro</h3>".mysqli_connect_error());
        }
        $sql = "select * from tbordemservico order by codigoOS";
        $result = mysqli_query($conexao, $sql);

         echo"<link rel ='stylesheet' href='../css/style.css'>";


        while($linha_resultado = mysqli_fetch_array($result))
            {
               
                echo"<tr class =''>";
                echo "<td class =''> {$linha_resultado['codigoOS']} </td>";
                echo "<td> {$linha_resultado['codigoProduto']} </td>";
                echo "<td> {$linha_resultado['nomeProduto']} </td>";

                echo "<td> {$linha_resultado['quantidadeProduzida']} </td>";
                echo"</tr>";
            }

     ?>
</body>
</html>