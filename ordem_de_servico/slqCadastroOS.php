<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php

    $codiordemdeservico =$_POST['codigo_ordem_de_servico']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoprodutoos=mb_strtolower( $_POST['nome_do_produto']??'','utf-8');
    $quantidade =$_POST['quantidade_entrada']??'';
    $data = $_POST['data']??'';
    
     
    
    function fccodigo($codigodoproduto,$nomedoprodutoos){

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("<h1>Erro</h1>".mysqli_connect_error());
    }

    $sql = "select codigoproduto, nomeproduto from tbcadastropeca where codigoproduto='$codigodoproduto' and nomeproduto ='$nomedoprodutoos'";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado && mysqli_num_rows($resultado)>0){
        mysqli_close($conexao);
        return true;
        
    } else{
        mysqli_close($conexao);
         echo"<link rel ='stylesheet' href='../css/style.css'> <div style='display: flex; justify-content: center;' > 
            <div class=''>
            
                <h1>Esse registro não foi lançado <br>Codigo nao compativel com o nome</h1>
                <a class='cp caixa  fontemenu' href='ordem_de_servico.php'>
                Voltar
                </a>
            </div>
            </div>";
        exit;
    }

    }
    fccodigo($codigodoproduto,$nomedoprodutoos);



    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados

    $slq = "insert into tbordemservico (codigoOS, codigoProduto, nomeProduto,quantidadeProduzida, data)
    values ('$codiordemdeservico','$codigodoproduto' ,'$nomedoprodutoos', '$quantidade', '$data')";
    
    

    
    
    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        echo 'Cadastrado com sucesso';
        header('Refresh: 2; url=ordem_de_servico.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>