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
        echo "    <div style='display: flex; justify-content: center;'>"; 
        echo "        <div class='box_cinza_claro' style='background: #19f261; border: 1px solid #ccc; border-radius: 4px; padding: 10px 20px;'>";
        echo"<h1> Usuário Excluido com Sucesso</h1>";
        echo "        </div>"; 
        
        
        header('Refresh: 2; url=FormularioCadastroNovoUsuario.php');
        exit; 
        

    }

    else {
        mysqli_close($conexao);
       
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class=''>
                    <a class='cp caixa  fontemenu' href='deletar.php'>
                    Voltar
                </a>
                </div>
            </div>";
        echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Nao foi exluido!</h1>";
        exit;
    }



    //header('Location:discografia_listagem.php');



?>