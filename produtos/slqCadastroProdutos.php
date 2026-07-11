<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>


<?php



    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =mb_strtolower($_POST['nome_do_produto'],'utf-8')??'';
    $fabricante= $_POST['fabricante']??'';
    $pesodoproduto =$_POST['peso_do_produto']??'';
    $alturadoproduto =$_POST['altura_do_produto']??'';
    $comprimentodoproduto =$_POST['comprimento_do_produto']??'';
    
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

    $slq = "insert into tbcadastropeca (codigoproduto, nomeProduto, fabricanteProduto,pesoProduto, alturaProduto,comprimentoProduto)
    values ('$codigodoproduto','$nomedoproduto' ,'$fabricante', '$pesodoproduto', '$alturadoproduto' , '$comprimentodoproduto')";
    
     
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
