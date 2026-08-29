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
    <nav style='display:flex;justify-content:space-around'>
    
    
    <div class =''style='display:flex;justify-content:center'>        
        <button class='btn-success' type="button" ">
            <a  href='../produtos/quantidade_estoque_atual.php'>Volta- Estoque Atual</a>
        </button>
    </div>
</nav>
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
               
                
                
                <td class="borda">Preço do Produto R$</td>
                
            </tr>
        </thead>
        <tbody>
            <?php
               
                try{
                    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
                }
                catch(mysqli_sql_exception $e){
                    die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
                }
               
                $sql = "select * from tbcadastropeca order by codigoproduto";
                $result = mysqli_query($conexao, $sql);

                


                while($linha_resultado = mysqli_fetch_array($result)){    
                    echo"<link rel ='stylesheet' href='../css/style.css'>";
                    echo"<tr class ='texto_centro mouse'>";
                    echo "<td class='borda'> <a href='../card/cart_produto.php' onclick=\"window.open('../card/cart_produto.php','informacaoproduto','width=200, height=300');return false;\" >    {$linha_resultado['codigoproduto']} </a> </td>";
                    echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['variavelproduto']} </td>";
                    echo "<td class='borda'> {$linha_resultado['fabricanteProduto']} </td>";      
                    
                    
                    echo "<td class='borda'> {$linha_resultado['preco']} </td>";
                    
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