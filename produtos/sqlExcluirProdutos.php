<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>

<?php
    $codigodoproduto =$_POST['codigo_do_produto']??'';
    $nomedoproduto =$_POST['nome_do_produto']??'';
    $fabricante= $_POST['fabricante']??'';
    $pesodoproduto =$_POST['peso_do_produto']??'';
    $alturadoproduto =$_POST['altura_do_produto']??'';
    $comprimentodoproduto =$_POST['comprimento_do_produto']??'';

    
    /*abri conexao*/
    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

    if(!$conexao){
        die("<h3>Erro</h3>".mysqli_connect_error());
    }

    #inserir os dados

    $sql = " delete from tbcadastropeca where codigoproduto ='$codigodoproduto' and nomeProduto='$nomedoproduto'";

    $resultado = mysqli_query($conexao,$sql);
                    

    $linha = mysqli_affected_rows($conexao);
    
    if ($linha > 0 ) {
        mysqli_close($conexao);
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class='box_cinza_claro'>
                    <h1> Excluido com SUCESSO</h1>
                </div>
            </div>";
        
        header('Refresh: 2; url=cadastro_de_produtos.php');
        exit; 
        

    }

    else {
        mysqli_close($conexao);
       
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class='box_cinza_claro'>
                    <a class='box_letra' href='deletar_produto.php'>
                    Voltar
                </a>
                </div>
            </div>";
        echo "<h1 class='box_letra' >Nao foi exluido!</h1>";
        exit;
    }



    //header('Location:discografia_listagem.php');



?>