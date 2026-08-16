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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
                        if(!$conexao){
                            die("<h3>Erro</h3>".mysqli_connect_error());
                        }
                        $sql = " select codigoProduto,nomeProduto, sum(quantidadeproduto) as quantidadetotal from tbentradaestoque  group by codigoProduto,nomeProduto ";

                        $resultado = mysqli_query($conexao,$sql);
                        if($resultado){
                            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                        
                                echo"<tr class ='text-center mouse'>";
                            
                                echo "<td class='borda'> {$linha_resultado['codigoProduto']} </td>";
                                echo "<td class='borda'> {$linha_resultado['nomeProduto']} </td>";

                                echo "<td class='borda'> {$linha_resultado['quantidadetotal']} </td>";
                                
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