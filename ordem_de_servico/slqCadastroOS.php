<?php

    $codiordemdeservico =$_POST['codigo_ordem_de_servico']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoprodutoos= $_POST['nome_do_produto_os']??'';
    $quantidade =$_POST['quantidade']??'';
    
    
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados

    $slq = "insert into tbordemservico (codigoOS, codigoProduto, nomeProduto,quantidadeProduzida)
    values ('$codiordemdeservico','$codigodoproduto' ,'$nomedoprodutoos', '$quantidade')";
    
    

    
    
    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        echo 'Cadastrado com sucesso';
        header('Refresh: 2; url=../estoque_entrada.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>