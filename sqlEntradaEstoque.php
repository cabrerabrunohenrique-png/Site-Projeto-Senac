<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php

    $codigoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =mb_strtolower($_POST['nome_do_produto']??'','utf-8');
    $quantidadeproduto =$_POST['quantidade_entrada'] ??'';
    $nf = $_POST['numero_nf']??'';
    $data =$_POST['data']??'';
    $tipo =$_POST['tipo']??'';

 
    
    /*abri conexao*/ 

    function fccodigo($codigoproduto,$nomedoproduto){

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("<h1>Erro</h1>".mysqli_connect_error());
    }

    $sql = "select codigoproduto, nomeProduto from tbcadastropeca where codigoproduto='$codigoproduto' and nomeProduto ='$nomedoproduto'";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado && mysqli_num_rows($resultado)>0){
        mysqli_close($conexao);
        return true;
        
    } else{
        mysqli_close($conexao);
         echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                <h1>Esse registro não foi lançado <br>Codigo nao compativel com o nome</h1>
                <a class='cp caixa  fontemenu' href='estoque_entrada.php'>
                Voltar
                </a>
            </div>
            </div>";
        exit;
    }
    
       

}
fccodigo($codigoproduto,$nomedoproduto);


    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "insert into tbentradaestoque (dataEntradaProduto, codigoProduto,nomeProduto,quantidadeProduto,nFProduto,tipo)
    values ('$data','$codigoproduto','$nomedoproduto','$quantidadeproduto','$nf', '$tipo' )";
    

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
