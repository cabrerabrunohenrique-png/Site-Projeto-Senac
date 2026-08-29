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
    
    <title>Quantidade_saida</title>
</head>
<body class ="">
    
<nav style='display:flex;justify-content:space-around'>
    
    <div class =''style='display:flex;justify-content:center'>        
        <button class='btn-success' type="button"  onclick="window.open('../listagem/lista_saida_estoque.php', 'popup_saida_', 'width=600,height=400');return false;">Relação de Produtos Vendidos
        </button>
    </div>
    
    <div class =''style='display:flex;justify-content:center'>        
        <button class='btn-success' type="button" ">
            <a  href='quantidade_estoque_atual.php'>Volta- Estoque Atual</a>
        </button>
    </div>
</nav>
<div style="height:20px"></div>
<header class='' > </header>
  
        <div class ="bg-body-secondary" style="display:flex;justify-content: center;">
            
            <div>                
                <h1 class=" texto_titulo  ">Relatorio de Saida por Produto</h1>
               
            </div>
          
           
        </div>
       
        <div class=''style='height:20px'> </div>
      
        <main class=" texto_centro borda " >
            <table style="width:100%">
                <thead>
                    <tr class=' text-center le'>

                        <td class="borda"> numero OS </td>
                        <td class="borda">codigo Produto</td>
                        <td class="borda">nome Produto</td>
                        <td class="borda">quantidade Produto</td>
                        <td class="borda">Atualizar Pagina</td>
                        <td class="borda">Relação analitica 
                    
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

                    
                        $sql = " select codigopeca,nomepeca, numeroOS, sum(quantidapeca) as quantidadetotal from tbsaidaestoque  group by codigopeca,nomepeca ";

                        $resultado = mysqli_query($conexao,$sql);
                                    
            
                
                        if($resultado){
                                        

                            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                                $codigoproduto = $linha_resultado['codigopeca'];
                        
                                echo"<tr class ='texto_centro mouse'>";
                                
                                echo "<td class='borda'>  {$linha_resultado['numeroOS']}  </td>";
                            
                                echo "<td class='borda'> <a href='../card/cart_produto.php'> {$linha_resultado['codigopeca']} </a> </td>";
                                echo "<td class='borda'> {$linha_resultado['nomepeca']} </td>";

                                echo "<td class='borda'>  <a  href='../card/card_totalPorProduto.php?id={$codigoproduto}' onclick= \"window.open('../card/card_totalPorProduto.php?id={$codigoproduto}', 'popup_saida_', 'width=600,height=400'); return false;\"> {$linha_resultado['quantidadetotal']} </a> </td>";
                                
                                
                                echo "<td class='borda'  ><button class='btn-success' type='button'  onclick='window.location.reload();'>
                                 Atualizar Página</button>";

                                echo "<td class='borda'>
                                        <button class='btn-success' type='button' onclick= \"window.open('../card/card_totalPorProduto.php?id={$codigoproduto}', 'popup_saida__', 'width=600,height=400'); return false;\">
                                            Relação Analítica
                                        </button>
                                    </td>";
                                echo "</tr>";

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
        <button class='btn-success' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>

    
          
    
</body>
</html>