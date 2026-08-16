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
    <title>Lista Produtos</title>
    
</head>
<body class ="">
    <div class=''>
     <h1 class='texto_titulo' >Relatorio de Produtos Cadastrados</h1>
    </div>
<main class=" texto_centro borda ">
    <table style="width:100%">
        <thead>
            <tr class=''>
                <td class="borda">Codigo do Produto</td>
                <td class="borda">Nome do Produto</td>
                <td class="borda">Variavel do Produto</td>
                <td class="borda">Fabricante</td>
                <td class="borda">Familia do Produto</td>
                <td class="borda">Data de Cadastro </td>
                <td class="borda">Categoria do Produto</td>
                <td class="borda">Preço do Produto R$</td>
                <td class="borda">Data da ultima Alteração</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
                if(!$conexao){
                    die("<h3>Erro</h3>".mysqli_connect_error());
                }
                $sql = "select * from tbcadastropeca order by codigoproduto";
                $result = mysqli_query($conexao, $sql);

                echo"<link rel ='stylesheet' href='../css/style.css'>";


                while($linha_resultado = mysqli_fetch_array($result)){    
                    echo"<tr class ='texto_centro mouse'>";
                    echo "<td class='borda'> {$linha_resultado['codigoproduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['variavelproduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['fabricanteProduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['familiaproduto']} </td>";
                    echo "<td class='borda'>{$linha_resultado['datacriacao']} </td>";
                    echo "<td class='borda'>{$linha_resultado['categoriaproduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['preco']} </td>";
                    echo "<td class='borda'>{$linha_resultado['dataalteracao']} </td>";
                    echo"</tr>";
                }
            ?>
        </tbody>
    </table>
</main>
   <div style="height: 20px"></div>
    
    <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
         <button class='btn-success' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
</body>
</html>