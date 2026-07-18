<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php


    $data = $_POST['data']??'';
    $codigodoproduto =$_POST['codigo_do_produto']??'';
                //deixa tudo minusculo
    $fabricante = mb_strtolower     //remove todos os espaco extra por espaco simples
                                (preg_replace('/\s+/',' ',
                                                            ($_POST['fabricante']??'')),'utf-8');
    $nomedoproduto =mb_strtolower(preg_replace('/\s+/',' ',($_POST['nome_do_produto']??'')),'utf-8');
    $variavel= $_POST['variavel']??'';
    $familia = mb_strtolower(preg_replace('/\s+/',' ',($_POST['familia']??'')),'utf-8');
    $categoria =mb_strtolower(preg_replace('/\s+/',' ',($_POST['categoria']??'')),'utf-8');
    $valor = $_POST['preco']??'';


    
    
   NomeProduto($nomedoproduto);
   CodigoProduto($codigodoproduto);
   
    
    function NomeProduto($nomedoproduto){

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("<h1>ERRO</1>".mysqli_connect_error());

    }
    $sql = "select nomeproduto from tbcadastropeca where nomeproduto ='$nomedoproduto'";

    $resultado = mysqli_query($conexao,$sql);

    if($resultado && mysqli_num_rows($resultado)>0){
        mysqli_close($conexao);
        $_SESSION['erro_nomeproduro']="Ja existe cadastro para esse nome";
       header('Location:cadastro_de_produtos.php');
        exit;
    }   
    mysqli_close($conexao);

   }

   function CodigoProduto($codigodoproduto){
    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if(!$conexao){
        die("<h1>Erro</1>".mysqli_connect_error());
    }
    $sql ="select codigoproduto from tbcadastropeca where codigoproduto ='$codigodoproduto'";
    $resultado = mysqli_query($conexao,$sql);

    if($resultado && mysqli_num_rows($resultado)>0){
        mysqli_close($conexao);
        $_SESSION['erro_codigo'] ="Ja existe cadastro com esse numero";
        header('Location:cadastro_de_produtos.php');
        exit;
    }
    mysqli_close($conexao);
   }





    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados

    $slq = "insert into tbcadastropeca (codigoproduto ,nomeProduto, fabricanteProduto, variavelproduto, familiaproduto, datacriacao, categoriaproduto, preco)
    values ('$codigodoproduto','$nomedoproduto' ,'$fabricante', '$variavel', '$familia', '$data', '$categoria', '$valor')";
    
     
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
