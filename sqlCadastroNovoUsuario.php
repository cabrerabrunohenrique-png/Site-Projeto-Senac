<?php

    $nomecompleto =$_POST['nome_completo']??'';
    $numeroderegistro =$_POST['numero_de_registro']??'';
    $niveldepermissao= $_POST['nivel_de_permissao']??'';
    $nomedeusuario =$_POST['nome_de_usuario']??'';
    $senhadeacesso =$_POST['senha_de_acesso']??'';
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "insert into tbcadastronovousuario (nomeCompleto, numeroRegistro, nivelPermisao, nomeUsuario,senhaAcesso)
    values ('$nomecompleto','$numeroderegistro' ,'$niveldepermissao', '$nomedeusuario', '$senhadeacesso' )";
    
    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        header('Location: index.php');
        exit; // Esse 'exit' é obrigatório para a página parar aqui e o redirecionamento funcionar
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }

   
    #fechar conexao

    



?>
