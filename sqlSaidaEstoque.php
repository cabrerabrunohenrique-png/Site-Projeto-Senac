<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


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
   
    

    
    function fccodigo($codigo_do_produto,$nome_do_produto){

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("<h1>Erro</h1>".mysqli_connect_error());
    }

    $sql = "select codigoPeca, nomePeca from tbsaidaestoque where codigoPeca='$codigo_do_produto' and nomePeca ='$nome_do_produto'";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado && mysqli_num_rows($resultado)>0){
        mysqli_close($conexao);
        return true;
        
    } else{
        mysqli_close($conexao);
         echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                <h1>Esse registro não foi lançado <br>Codigo nao compativel com o nome</h1>
                <a class='cp caixa  fontemenu' href='estoque_saida.php'>
                Voltar
                </a>
            </div>
            </div>";
        exit;
    }
    
       

}
fccodigo($codigo_do_produto,$nome_do_produto);


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
