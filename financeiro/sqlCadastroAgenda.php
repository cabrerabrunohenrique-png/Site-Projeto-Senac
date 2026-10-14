<?php

    $data = $_POST['Data'] ??'';
    $nome = $_POST['Nome'] ??'';
    $valor = $_POST['Valor'] ??'';
    $nf = $_POST['Nf'] ??'';
    $tipo = $_POST['Tipo'] ??'';

    try {
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    }
    catch (mysqli_sql_exception $e){
        die("<h1>Erro com a conexção do banco de dados</h1> " . $e->getMessage());
    }

    $sql = "insert into agenda (data, nome, valor, nf,tipo) values ('$data','$nome','$valor','$nf','$tipo')";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado){
        mysqli_close($conexao);
        echo "<p>Certo Data de Pagamento: $data </p>";
        
        echo "<p>Nome do Fornecedor/Outros: $nome </p>";
       
        echo "<p>Valor: $valor </p>" ;
       
        echo "<p>Numero da NF: $nf </p>";
       
        echo "<p>Tipo: $tipo </p>";
        exit;
        
    }

?>