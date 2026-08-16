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
<title>Lista OS</title>
</head>
<body class ="">

<div class='' style='display: flex; justify-content: center '>
     <h1 class='texto_titulo'>Relação de Ordem de Servios(OS)</h1>
</div>

<main class=" texto_centro borda " >
    <table style="width:100%">
        <thead>
            <tr class='' >
                <td class="borda"> Data </td>
                <td class="borda">Codigo OS</td>
                <td class="borda">Codigo do Produto</td>
                <td class="borda">Nome do Produto</td>
                <td class="borda">Quantidade</td>
                <td class="borda">Primeiro a Cadastrar</td>
                <td class="borda">Data Alteração </td>
                <td class="borda">Responsavel</td> 
            </tr>
        </thead>
        <tbody>
            <?php
                $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
                if(!$conexao){
                    die("<h3>Erro</h3>".mysqli_connect_error());
                }
                $sql = "select * from tbordemservico order by codigoOS";
                $result = mysqli_query($conexao, $sql);

              


                while($linha_resultado = mysqli_fetch_array($result)){
                    echo"<tr class ='texto_centro mouse'>";
                    echo "<td class='borda'> {$linha_resultado['data']} </td>";
                    echo "<td class='borda'> {$linha_resultado['codigoOS']} </td>";
                    echo "<td class='borda'> {$linha_resultado['codigoProduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";

                    echo "<td class='borda'> {$linha_resultado['quantidadeProduzida']} </td>";
                    echo "<td class='borda'> {$linha_resultado['responsavel']}</td>";
                    echo "<td class='borda'> {$linha_resultado['data_alteracao']}</td>";
                    echo "<td class='borda'> {$linha_resultado['responsavel_alteracao']}</td>";
                    echo"</tr>";
                }

            ?>
        </tbody>
    </table>
</main>
<div style="height:20px"></div>

     <div class =''style='display:flex;justify-content:center'>        
        <button class='btn-success' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
</body>
</html>