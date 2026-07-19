<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

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

    <title>Lista Entrada Estoque</title>
</head>
<body class ="container">
 

<header>
    <nav >
        <div style="display:flex;justify-content: space-between;">
            <div>
                <a class="letraPretoAzul caixa text-bg-info  fontemenu le" href ="../navegacao.php">
                    Menu
                </a>
            </div>
            <div>
                <a class='letraFundoAzul caixa text-bg-success fontemenu le' href="../acessar_aos_relatorios.php">Acessar aos Relatorios</a>
            </div>
        </div>
         
    </nav>
</header>
<div class=''style='height:20px'> </div>

<div class='' style='display: flex; justify-content: center '>
     <h1 class='fontemenu'style ='text-transform: uppercase'>Relação de Produtos lançado no Estoque</h1>
</div>
<div class=''style='height:20px'> </div>
<div style ='width: px;height:10px;' > </div>
    <main >
        <table class="table ">
            <!-- pra estruturar a tabela-->
            <thead>
                <tr class=''>
                    <td class =''>dataEntradaProduto</td>
                    <td>codigoProduto</td>
                    <td>nomeProduto</td>
                    <td>quantidadeProduto</td>
                    <td>nFProduto</td>
                </tr>
            </thead>
        
        <!-- pra estruturar a tabela-->
            <tbody>
                <?php
                    $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
                        if(!$conexao){
                            die("<h3>Erro</h3>".mysqli_connect_error());
                        }
                    $sql = "select * from tbentradaestoque order by dataEntradaProduto";
                    $result = mysqli_query($conexao, $sql);

                    echo"<link rel ='stylesheet' href='../css/style.css'>";


                    while($linha_resultado = mysqli_fetch_array($result)){
                    
                        echo"<tr class =''>";
                        echo "<td class =''> {$linha_resultado['dataEntradaProduto']} </td>";
                        echo "<td> {$linha_resultado['codigoProduto']} </td>";
                        echo "<td> {$linha_resultado['nomeProduto']} </td>";

                        echo "<td> {$linha_resultado['quantidadeProduto']} </td>";
                        echo "<td> {$linha_resultado['nFProduto']} </td>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
        <button class='text-bg-primary' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
</body>
</html>