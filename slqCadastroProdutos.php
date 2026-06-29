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

    #inserir os dados

    $slq = "insert into tbcadastropeca (codigoproduto, nomeProduto, fabricanteProduto,pesoProduto, alturaProduto,comprimentoProduto)
    values ('$codigodoproduto','$nomedoproduto' ,'$fabricante', '$pesodoproduto', '$alturadoproduto' , '$comprimentodoproduto')";
    
    

    
    
    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        echo 'Cadastrado com sucesso';
        header('Refresh: 2; url=estoque_entrada.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>
