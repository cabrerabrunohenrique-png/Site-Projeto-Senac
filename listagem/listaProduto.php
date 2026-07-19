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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel ="stylesheet" href="../css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Lista Produtos</title>
</head>
<body class ="container">
 
<!-- cabeça -->
<header>
    <nav >
        <div class ='bg-body-secondary' style="display:flex;justify-content: space-between;">
            <div class="">
                <!-- //link para acessar -->
                <a class="cp caixa  fontemenu" href="../produtos/cadastro_de_produtos.php">
                Voltar para Cadastro de Novos Produtos
                </a>
            </div>
            <div>
                <a class='letraFundoAzul caixa text-bg-success fontemenu le' href="../acessar_aos_relatorios.php">Acessar aos Relatorios</a>
            </div>


        </div>
        <div style="height: 15px"></div>
       
    </nav>    
</header>
<div class=''style='height:10px'> </div>
<div class='fontemenu' style='display: flex; justify-content: center '>
     <h1 class=''style ='text-transform: uppercase' >Relatorio de Produtos Cadastrados</h1>
</div>

    <main >
        
            <table class="table ">
            <tr class=''>
                <td class =''>codigoproduto</td>
                <td>nomeProduto</td>
            <td>fabricanteProduto</td>
                
            </tr>
        </table>
        
    </main>
    <?php
        $conexao = mysqli_connect("localhost", "root", "", "bdprojetosenac");
        if(!$conexao){
            die("<h3>Erro</h3>".mysqli_connect_error());
        }
        $sql = "select * from tbcadastropeca order by codigoproduto";
        $result = mysqli_query($conexao, $sql);

         echo"<link rel ='stylesheet' href='../css/style.css'>";


        while($linha_resultado = mysqli_fetch_array($result))
            {
               
                echo"<tr class =''>";
                echo "<td class =''> {$linha_resultado['codigoproduto']} </td>";
                echo "<td> {$linha_resultado['nomeProduto']} </td>";
                echo "<td> {$linha_resultado['fabricanteProduto']} </td>";
                echo"</tr>";
            }

     ?>
   
    
    <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
        <button class='text-bg-primary' type="button"  onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
</body>
</html>