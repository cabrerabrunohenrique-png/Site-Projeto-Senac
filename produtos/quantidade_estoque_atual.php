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
    
    <title>Quantidade</title>
</head>
<body class ="">
    <div class ="">
        <div class=" ">
            <h1 class=" texto_titulo  "> Relatorio de estoque atual</h1>
        </div>
    </div>      
    <main class=" texto_centro borda " >        
            <table style="width:100%">
                <thead class="" >
                    <tr class="">                    
                        <td class="borda">codigo produto</td>
                        <td class="borda" >nome produto</td>
                        <td class="borda">quantidade estoque</td>
                    </tr>
                </thead>
        
                <tbody class="">
                    <?php
                       
                      try{
                            $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
                            }
                            catch(mysqli_sql_exception $e){
                                die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
                            }

                    
                        $sql =" SELECT 
                                    codigoProduto,
                                    MAX(nomeProduto) AS nomeProduto, -- Evita nulos no nome se veio só da saída
                                    SUM(quantidade) AS saldo
                                FROM (
                                    -- Busca todas as entradas (positivo)
                                    SELECT codigoProduto, nomeProduto, quantidadeProduto AS quantidade 
                                    FROM tbentradaestoque
                                    
                                    UNION ALL
                                    
                                    -- Busca todas as saídas (negativo)
                                    SELECT codigoPeca, NULL AS nomeProduto, -quantidaPeca AS quantidade 
                                    FROM tbsaidaestoque
                                ) Movimentacao
                                GROUP BY codigoProduto;";
 
                        
                        /*= "SELECT 
                                        e.codigoProduto,e.nomeProduto,
                                        (SUM(e.quantidadeProduto) - COALESCE(s.total_saida, 0)) AS saldo 
                                        FROM tbentradaestoque e
                                        LEFT JOIN (
                                        SELECT codigoPeca, SUM(quantidaPeca) AS total_saida 
                                        FROM tbsaidaestoque 
                                        GROUP BY codigoPeca
                                        ) s ON e.codigoProduto = s.codigoPeca
                                        GROUP BY e.codigoProduto,e.nomeProduto;
                        ";*/
                         $resultado = mysqli_query($conexao,$sql);
                        if($resultado){

                            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                        
                

                                echo"<tr class ='texto_centro mouse '>";
                            
                                echo "<td class='borda'> <a href='../card/cart_produto.php'> {$linha_resultado['codigoProduto']} </td>";
                                echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";

                                echo "<td class='borda'> <a href='quantidade_produto_entrada.php'>     {$linha_resultado['saldo']} </td>";
                                
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
    <div style="height:20px"></div>
     <div class =''style='display:flex;justify-content:center'>        
        
            <button class='btn-success' type="button" ">
                <a  href='../acessar_aos_relatorios.php'>Relatorios</a>
            </button>
    </div>

    
</body>
</html>