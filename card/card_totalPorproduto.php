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
    
    <title>Relacao Saida por Produto</title>
</head>
<body class =" ">
    <nav style='display:flex;justify-content:space-around' >
    <div class =''style='display:flex;justify-content:center'>
        <button class='btn-success' type="button" ">
            <a  href='../produtos/quantidade_estoque_atual.php'>Voltar - Estoque Atual</a>
        </button>
    </div>
</nav>
<div style="height:20px"></div>     
    <main class=" texto_centro borda ">
        <table style="width:100%">
            <thead>
                <h1>TOTAL SAIDA  </h1>
                <tr class=''>
                    <td class="borda">data </td>
                    <td class="borda">codigo</td>
                    <td class="borda">nome</td>
                    <td class="borda">quantidade</td>
                    <td class="borda">Nf</td>
                    <td class="borda">OS</td>
                    <td class="borda">Atualizar Pagina</td>
                    
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php

                    $codigoproduto = $_GET ['id'];

                    try{$conexao = mysqli_connect("localhost","root","","bdprojetosenac");
                    }
                    catch(mysqli_sql_exception $e){
                        die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
                    }
                        
                    $sql = "select * from tbsaidaestoque where codigoPeca ={$codigoproduto}";
                    $result = mysqli_query($conexao, $sql);

                    
                     while($linha_resultado = mysqli_fetch_array($result)){
                    
                    //if($linha_resultado = mysqli_fetch_array($result)){ 
                        
                        echo"<link rel ='stylesheet' href='../css/style.css'>";
                        echo"<tr class ='texto_centro mouse'>";
                        
                        

                        echo "<td class='borda'> {$linha_resultado['dataSaida']} </td>";
                        echo "<td class='borda'> {$linha_resultado['codigoPeca']} </td>";
                        echo "<td class='borda'> {$linha_resultado['nomePeca']} </td>";
                        echo "<td class='borda'> {$linha_resultado['quantidaPeca']} </td>";
                        echo "<td class='borda'>{$linha_resultado['numeroNf']} </td>";
                        echo "<td class='borda'> <a href='../listagem/lista_ordem_servico.php'> {$linha_resultado['numeroOs']} </td>";
                        
                        echo "<td class='borda'  ><button class='btn-success' type='button'  onclick='window.location.reload();'>
                        Atualizar Página</button>";
                        
                            
                        
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
   
    
</body>
<script src="../js/produtos.js"></script>
</html>

