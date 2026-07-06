<?php

    $codigoproduto =$_POST['codigo_do_produto_entrada']??'';
    $nomedoproduto =mb_strtolower($_POST['nome_do_produto_entrada']??'','utf-8');
    $quantidadeproduto =$_POST['quantidade_entrada'] ??'';
 
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "insert into tbentradaestoque (codigoproduto, nomeproduto,quantidadeproduto)
    values ('$codigoproduto','$nomedoproduto','$quantidadeproduto' )";
    

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
