<?php

    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =$_POST['nome_do_produto']??'';
    $fabricante= $_POST['fabricante']??'';
    $pesodoproduto =$_POST['peso_do_produto']??'';
    $alturadoproduto =$_POST['altura_do_produto']??'';
    $comprimentodoproduto =$_POST['comprimento_do_produto']??'';
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    $slq = "update tbcadastropeca set codigoproduto ='$codigodoproduto', nomeProduto ='$nomedoproduto', fabricanteProduto ='$fabricante', pesoProduto ='$pesodoproduto', alturaProduto= '$alturadoproduto' , comprimentoProduto = '$comprimentodoproduto'  where codigoproduto = '$codigodoproduto'";
    
    $resultado = mysqli_query($conexao ,$slq);

    $linha = mysqli_affected_rows($conexao);
   
   
    if ($linha >0) {
        mysqli_close($conexao);
        echo 'Atualizado com sucesso';
        header('Refresh: 2; url=cadastro_de_produtos.php');
        exit;
    }
    elseif($linha=== 0) {
        mysqli_close($conexao);
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class='box_cinza_claro'>
                    <a class='box_letra' href='cadastro_de_produtos.php'>
                    Cadastro de Prodtuos
                </a>
                </div>
                 <div style='width: 15px> </div>
                <div class='box_cinza_claro'>
                    <a class='box_letra' href='../navegacao.php'>
                    Menu
                </a>
                </div>
            </div>";
        echo "Nenhuma alteração foi feita";
        exit;
    }




?>