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
    
    
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Lista Produtos</title>
    <style>
        :root {
        --primary-color: #2c3e50;
        --text-color: #333333;
        --bg-light: #f8f9fa;
        --border-color: #dddddd;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
        }

         .fontemenu {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
        }
          .fontemenu h1 {
            text-transform: uppercase;
            color: var(--primary-color);
            font-size: 24px;
            margin: 0;
            letter-spacing: 1px;
        }

         main {
            max-width: 1000px;
            margin: 0 auto;
            overflow-x: auto; /* Garante que a tabela seja responsiva no celular */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }


        .table thead tr {
            background-color: var(--primary-color);
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .table th, .table td {
            padding: 12px 15px;
            border: 1px solid var(--border-color);
        } 

        .table tbody tr:nth-of-type(even) {
            background-color: var(--bg-light); /* Linhas alternadas coloridas */
        }
        .table tbody tr:hover {
            background-color: #bebb4c65; /* Efeito visual ao passar o mouse */
        }

    </style>








</head>
<body class ="container">
 
<header></header>
<div class='fontemenu'style='height:10px'> </div>
<div class='fontemenu' style='display: flex; justify-content: center '>
     <h1 class=''style ='text-transform: uppercase' >Relatorio de Produtos Cadastrados</h1>
</div>
<main>
    <table class="table ">
        <thead>
            <tr class=''>
                <th class =''>codigoproduto</th>
                <th>nomeProduto</th>
                <th>fabricanteProduto</th>
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
                    echo"<tr class =''>";
                    echo "<td class =''> {$linha_resultado['codigoproduto']} </td>";
                    echo "<td> {$linha_resultado['nomeProduto']} </td>";
                    echo "<td> {$linha_resultado['fabricanteProduto']} </td>";
                    echo"</tr>";
                }
            ?>
        </tbody>
    </table>
</main>
   <div style="height: 20px"></div>
    
    <div class =''style='display:flex;justify-content:center'>        
        <!-- Código correto para atualizar a página -->
         <button class=''  type="button" style='background-color:#0d6efd;color: #FFFFFF; ' onclick="window.location.reload();">
            Atualizar Página
        </button>
    </div>
</body>
</html>