<?php

    $codigo_do_ =$_POST['codigo_do_']??'';
    $data_entrada_produto =$_POST['data_entrada_produto']??'';
    $codigo_do_produto= $_POST['codigo_do_produto']??'';
    $nome_do_produto =$_POST['nome_do_produto']??'';
    $quantidade_entrada =$_POST['quantidade_entrada']??'';
    $numero_nf =$_POST['numero_nf']??'';

    $numero_cpf =$_POST['numero_cpf']??'';
    $numero_os =$_POST['numero_os']??'';
    $situacao_produto =$_POST['situacao_produto']??'';
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "insert into tbsaidaestoque (dataSaida, codigoPeca, nomePeca, quantidaPeca, numeroNf, cpfPeca, numeroOs, situacaoPeca)
    values ('$data_entrada_produto' ,'$codigo_do_produto', '$nome_do_produto', '$quantidade_entrada', '$numero_nf', '$numero_cpf',  '$numero_os','$situacao_produto')";
    

    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        echo 'Cadastrado com sucesso';
        header('Refresh: 2; url=estoque_saida.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>
