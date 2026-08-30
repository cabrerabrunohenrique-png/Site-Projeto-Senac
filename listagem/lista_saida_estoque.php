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
    <title>Estoque Saida</title>
    <script>window.name = "janela_mae_saida";</script> 
</head>
<body class ="">
<nav>
    
     <div class =''style='display:flex;justify-content:center'>        
        
            <button class='btn-success' type="button" onclick="
                    // 1. Se a mãe (Página 2) ainda estiver aberta, usa o caminho normal
                    if (window.opener && window.opener.opener && !window.opener.opener.closed) { 
                        window.opener.opener.location.href = '../produtos/quantidade_estoque_atual.php';
                        window.close(); 
                    } 
                    // 2. Se a mãe (Página 2) foi fechada, localiza a Página 1 pelo nome e a redireciona
                    else {
                        let janelaMae = window.open('', 'janela_mae_saida');
                        if (janelaMae && janelaMae.opener && !janelaMae.opener.closed) {
                            janelaMae.opener.location.href = '../produtos/quantidade_estoque_atual.php';
                            janelaMae.opener.focus();
                        }
                        window.close();
                    }
                ">Voltar - Estoque Atual </a>
            </button>
    </div>
    <div style="height:20px"></div>
</nav>

<div class=''>
     <h1 class='texto_titulo'>Relação de Produtos Vendido/Saida</h1>
</div>


 <main class="texto_centro borda" > 
    <table style="width:100%">
        <thead>
            <tr class=''>
                <td class="borda"'>data Saida</td>
                <td class="borda">codigo Peca</td>
                <td class="borda">nome Peca</td>
                <td class="borda">quantida Peca</td>
                <td class="borda">numero Nf</td>
                <td class="borda">numero Os</td>


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



                $sql = "select * from tbsaidaestoque order by dataSaida";
                $result = mysqli_query($conexao, $sql);

                


                while($linha_resultado = mysqli_fetch_array($result)){
                    echo"<link rel ='stylesheet' href='../css/style.css'>";
                    echo"<tr class ='texto_centro mouse'>";
                    echo "<td class='borda'> {$linha_resultado['dataSaida']} </td>";
                    echo "<td class='borda'> <a href='../card/cart_produto.php'> {$linha_resultado['codigoPeca']} </a> </td>";
                    echo "<td class='borda'> {$linha_resultado['nomePeca']} </td>";

                    echo "<td class='borda'> {$linha_resultado['quantidaPeca']} </td>";
                    echo "<td class='borda'> {$linha_resultado['numeroNf']} </td>";
                    echo "<td class='borda'> <a href='../listagem/lista_ordem_servico.php' onclick=\"window.open('../listagem/lista_ordem_servico.php?mae=janela_mae_saida', 'popup1', 'width=800,height=600'); return false;\">{$linha_resultado['numeroOs']}</a></td>";

                    //echo "<td class='borda'> <a href='../listagem/lista_ordem_servico.php'> {$linha_resultado['numeroOs']}' onclick=\"window.open('../listagem/lista_ordem_servico.php,'popup1');return false;\"> </a></td>";
                    echo"</tr>";
                }
            ?>
        </tbody>
    </table>
</main>
    <div style="height:20px"></div>

    <div class =''style='display:flex;justify-content:center'>        
        <button class='btn-success' type="button"  onclick="window.location.reload();"> Atualizar Página
        </button>
    </div>
    
</body>
</html>