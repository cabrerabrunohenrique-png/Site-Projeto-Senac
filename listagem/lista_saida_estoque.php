<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel ="stylesheet" href="../css/style.css">
    <title>Alistagem_saida_estoque</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header>
    <nav >
        <div class ='' style="display:flex;justify-content: center;">
            <div class="">
                <!-- //link para acessar -->
                <a class="letraPretoAzul caixa" href="../estoque_saida.php">
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
     <h1 class=''style ='text-transform: uppercase' >Relação de Produtos Vendido/Saida</h1>
</div>
<div style ='width: px;height:10px;' > </div>


    <main >

    <table class="table ">
        <tr class=''>
            <td class =''>dataSaida</td>
            <td>codigoPeca</td>
           <td>nomePeca</td>
           <td>quantidaPeca</td>
           <td>numeroNf</td>
           <td>cpfPeca</td>
           <td>numeroOs</td>
           <td>situacaoPeca</td>
                       
        </tr>
       
    </main>
    
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
        if(!$conexao){
            die("<h3>Erro</h3>".mysqli_connect_error());
        }
        $sql = "select * from tbsaidaestoque order by dataSaida";
        $result = mysqli_query($conexao, $sql);

         echo"<link rel ='stylesheet' href='../css/style.css'>";


        while($linha_resultado = mysqli_fetch_array($result))
            {
               
                echo"<tr class =''>";
                echo "<td class =''> {$linha_resultado['dataSaida']} </td>";
                echo "<td> {$linha_resultado['codigoPeca']} </td>";
                echo "<td> {$linha_resultado['nomePeca']} </td>";

                echo "<td> {$linha_resultado['quantidaPeca']} </td>";
                echo "<td> {$linha_resultado['numeroNf']} </td>";

                echo "<td> {$linha_resultado['cpfPeca']} </td>";
                echo "<td> {$linha_resultado['numeroOs']} </td>";
                echo "<td> {$linha_resultado['situacaoPeca']} </td>";

                echo"</tr>";
            }

     ?>
</body>
</html>