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
                <h1>Informações do Produto</h1>
                <tr class=''>
                    <td class="borda">Codigo do Produto</td>
                    <td class="borda">Nome do Produto</td>
                    <td class="borda">Variavel do Produto</td>
                    <td class="borda">Fabricante</td>
                    <td class="borda">Familia do Produto</td>
                    <td class="borda">Data de Cadastro </td>
                    <td class="borda">Categoria do Produto</td>
                    <td class="borda">Preço do Produto R$</td>
                    <td class="borda">Data da ultima Alteração</td>
                </tr>
            </thead>
            <tbody>
  
<?php
$codigoproduto = $_GET ['id'];

     
try{$conexao = mysqli_connect("localhost","root","","bdprojetosenac");}
catch(mysqli_sql_exception $e){
    die ("Erro com o banco de dados"."<h1>Erro</h1> <a href='../index.php'>Voltar</a>" );
}

       
    

    $sql = "select * from tbcadastropeca where codigoproduto = {$codigoproduto}";
   
    $result = mysqli_query($conexao, $sql);


    
    if ($linha = mysqli_fetch_assoc($result)){
        echo"<link rel ='stylesheet' href='../css/style.css'>";
        echo"<tr class ='texto_centro mouse'>";
        

        echo " <td class='borda'>{$linha['codigoproduto']}</td>";
        echo " <td class='borda'>{$linha['nomeProduto']}</td>";
        echo " <td class='borda'>{$linha['fabricanteProduto']}</td>";
        echo " <td class='borda'>{$linha['variavelproduto']}</td>";
        echo " <td class='borda'>{$linha['familiaproduto']}</td>";
        echo " <td class='borda'>{$linha['datacriacao']}</td>";
    }
       
    ?>   
       
       
                 </table>
        </main>
</body>
       
        <div class=''style='height:95px'> </div>
            <div class =''style='display:flex;justify-content:center'>        
            
            <button class='btn-success' type='button'  onclick='window.location.reload();'>
                Atualizar Página
            </button>
        </div>
        <div>
             <a href='cart_produto.php'> votlar pagina </a>
        </div>    
       

    


