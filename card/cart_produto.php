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
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    
    <title>Cart</title>
</head>
<body class =" ">     
    <main class=" texto_centro borda ">
        <table style="width:100%">
            <thead>
                <h1>Informações dos Produto</h1>
                <tr class=''>
                    <td class="borda">Codigo do Produto </td>
                    <td class="borda">Nome do Produto</td>
                    <td class="borda">Variavel do Produto</td>
                    <td class="borda">Fabricante</td>
                    <td class="borda">Familia do Produto</td>
                    
                    <td class="borda">Categoria do Produto</td>
                    <td class="borda">Preço do Produto R$</td>
                  
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    try{$conexao = mysqli_connect("localhost","root","","bdprojetosenac");
                    }
                    catch(mysqli_sql_exception $e){
                        die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
                    }
                        
                    $sql = "select * from tbcadastropeca order by codigoproduto";
                    $result = mysqli_query($conexao, $sql);
                    while($linha_resultado = mysqli_fetch_array($result)){ 
                        $codigoproduto = $linha_resultado['codigoproduto'];

                        echo"<link rel ='stylesheet' href='../css/style.css'>";
                        echo"<tr class ='texto_centro mouse'>";
                        
                        echo "<td class='borda'> <a href='card.php?id={$codigoproduto}'>{$linha_resultado['codigoproduto']}</a> </td>";

                        echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['variavelproduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['fabricanteProduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['familiaproduto']} </td>";
                        echo "<td class='borda'>{$linha_resultado['categoriaproduto']} </td>";
                        echo "<td class='borda'> {$linha_resultado['preco']} </td>";
                        
                        echo "<td><button class='btn-success' type='button'  onclick='window.location.reload();'>
                        Atualizar Página</button>";
                        echo"</tr>";

                        
                    }
                ?>
            </tbody>
        </table>
    </main> 

    <div class=''style='height:95px'> </div>
        <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
         <button class='btn-success' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
    <div class=''style='height:95px'> </div>
    <div class =''style='display:flex;justify-content:center'>      
         <a href='../listagem/listaProduto.php'>Volta Pagina Relação de Produtos </a>
    </div>
    
    
</body>
<script src="../js/produtos.js"></script>
</html>

