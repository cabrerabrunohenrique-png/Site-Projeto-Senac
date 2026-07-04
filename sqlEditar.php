<?php

    $nomecompleto =$_POST['nome_completo']??''; 
    $niveldepermissao= $_POST['nivel_de_permissao']??'';
    $nomedeusuario =$_POST['nome_de_usuario']??'';
    $senhadeacesso =$_POST['senha_de_acesso']??'';
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    $slq = "update tbcadastronovousuario set nomeCompleto ='$nomecompleto', nivelPermisao ='$niveldepermissao', nomeUsuario ='$nomedeusuario', senhaAcesso='$senhadeacesso' where nomeCompleto ='$nomecompleto'";
    
    $resultado = mysqli_query($conexao ,$slq);

    $linha = mysqli_affected_rows($conexao);
   
   
    if ($linha >0) {
        mysqli_close($conexao);
        echo 'Atualizado com sucesso';
        header('Refresh: 2; url=index.php');
        exit;
    }
    elseif($linha=== 0) {
        mysqli_close($conexao);
        echo"<link rel ='stylesheet' href='css/style.css'>
            <div style='display: flex; justify-content: center;' > 
                <div class=''>
                    <a class='cp caixa  fontemenu' href='index'.php'>
                    Login
                </a>
                </div>
            </div>";
        echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Nenhuma alteração foi feita </h1>";
        exit;
    }




?>