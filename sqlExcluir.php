<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    header('Location:../index.php');
    exit;

}

?>

<?php
    $nomecompleto =$_POST['nome_completo']??'';
    $nomedeusuario =$_POST['nome_de_usuario']??'';
    

    
    /*abri conexao*/
    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

    if(!$conexao){
        die("<h3>Erro</h3>".mysqli_connect_error());
    }

    #inserir os dados

    $sql = " delete from tbcadastronovousuario where nomeCompleto ='$nomecompleto' and nomeUsuario='$nomedeusuario'";

    $resultado = mysqli_query($conexao,$sql);
                    

    $linha = mysqli_affected_rows($conexao);
    
    if ($linha > 0 ) {
        mysqli_close($conexao);
        echo "<link rel ='stylesheet' href='../css/style.css'>";
            echo "
            <div class='success-container'>
                <div class='success-box'>
                    <h1 class='success-title' >Usuário excluido com Sucesso</h1>                  
                    
                </div>
            </div>";        
        
        header('Refresh: 2; url=deletar.php');
        exit; 
        

    }

    else {
        mysqli_close($conexao);
       echo "<link rel ='stylesheet' href='../css/style.css'>
            <div class='alert-container'>
                <div class='alert-box'>
                    <h1 class='alert-title' >Atenção: Nao foi exluido!.</h1>           
                    <a class='btn-back alert-text 'href='deletar.php'>Voltar Pagina</a>
                </div>
            </div>"  ;
       
        exit;
    }


?>