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
    
   <link rel ="stylesheet" href="../css/style_lista.css">  
    <title>Lista Entrada Estoque</title>
</head>
<body class ="container">
    




<div class='' style='display: flex; justify-content: center '>
     <h1 class='texto_titulo'style ='text-transform: uppercase'>Relação de Produtos lançado no Estoque</h1>
</div>
<div class=''style='height:20px'> </div>
<div style ='width: px;height:10px;' > </div>
    <main class=" texto_centro borda " >
       <table style="width:100%">
            <!-- pra estruturar a tabela-->
            <thead>
                <tr class=''>
                   <td class="borda">data Entrada Produto</td>
                   <td class="borda">codigo Produto</td>
                    <td class="borda">nome Produto</td>
                    <td class="borda">quantidade Produto</td>
                    <td class="borda">nF Produto</td>
                </tr>
            </thead>
        
        <!-- pra estruturar a tabela-->
            <tbody>
                <?php
                     try{
                    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
                    }
                    catch(mysqli_sql_exception $e){
                        die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
                    }

                    $sql = "select * from tbentradaestoque order by dataEntradaProduto";
                    $result = mysqli_query($conexao, $sql);

                   


                    while($linha_resultado = mysqli_fetch_array($result)){
                        echo"<link rel ='stylesheet' href='../css/style.css'>";
                        echo"<tr class ='texto_centro mouse '>";
                        echo "<td class='borda'> {$linha_resultado['dataEntradaProduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['codigoProduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";

                        echo "<td class='borda'> {$linha_resultado['quantidadeProduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['nFProduto']} </td>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
    <div style="height:20px"></div>

    <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
        <button class='btn-success' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
</body>
</html>