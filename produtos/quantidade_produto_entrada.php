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
    
    <title>Quantidade_entrada</title>
</head>
<body class =" ">
<header class='' ></header>
<nav style='display:flex;justify-content:space-around'>
          
        <div class =''style='display:flex;justify-content:center'>        
        
            <button class='btn-success' type="button" ">
                <a  href='../listagem/lista_entra_estoque.php' onclick="window.open('../listagem/lista_entra_estoque.php','entrada', 'width=400, height=300'); return false;" >Relação de Produtos lançado no Estoque</a>
            </button>
        </div>
        
    <div class =''style='display:flex;justify-content:center'>        
        <button class='btn-success' type="button" ">
            <a  href='quantidade_estoque_atual.php' >Volta- Estoque Atual</a>
        </button>
    </div>
</nav>
<div style="height:20px"></div>
    
        <div class =""style="display:flex;justify-content: center;">
            
            <div>
                 <h1 class=" texto_titulo  ">  Relatorio de Quantidade de Entrada por Produto
                </h1>
            </div>                  
        </div>       
        <div class=''style='height:20px'> </div>
        <main  class=" texto_centro borda ">
            <table  style="width:100%">
                <thead>
                    <tr class=' '>
                        <td class="borda">codigo Produto</td>
                        <td class="borda">nome Produto</td>
                        <td class="borda">quantidade Produto</td>
                        <td class="borda">Atualizar Pagina</td>
                        <td class="borda">Relação Analitica</td>
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

                        $sql = " select codigoProduto,nomeProduto, sum(quantidadeproduto) as quantidadetotal from tbentradaestoque  group by codigoProduto,nomeProduto ";

                        $resultado = mysqli_query($conexao,$sql);
                        if($resultado){
                            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                                $codigoproduto = $linha_resultado['codigoProduto'];
                        
                                echo"<tr class ='text-center mouse'>";
                            
                                echo "<td class='borda'> <a href='../card/cart_produto.php' onclick=\"window.open('../card/cart_produto.php','informacaoproduto','width=300, heigth=300');return false;\" > {$linha_resultado['codigoProduto']} </a> </td>";
                                echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";

                                echo "<td class='borda'>
                                    <a href='../card/card_totalPorprodutoEntrada.php?id={$codigoproduto}' onclick=\"window.open('../card/card_totalPorprodutoEntrada.php?id={$codigoproduto}','poup5','width=400,height=300');return false;\"> {$linha_resultado['quantidadetotal']} </td>";
                                
                                echo "<td class='borda'  ><button class='btn-success' type='button'  onclick='window.location.reload();'> Atualizar Página</button>";

                                echo "<td class ='borda'>
                                        <button class='btn-success' type='button'>
                                            <a href ='../card/card_totalPorprodutoEntrada.php?id={$codigoproduto}' onclick=\"window.open('../card/card_totalPorprodutoEntrada.php?id={$codigoproduto}','poup5','width=400,height=300');return false;\">Relação Analitica
                                            </a>
                                        </button>
                                </td> ";

                                echo"</tr>";
                            }
                            mysqli_close($conexao);
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