<?php

    session_start();


    $nomecompleto =mb_strtolower($_POST['nome_completo']??'','utf-8');
    $numeroderegistro =$_POST['numero_de_registro']??'';
    $niveldepermissao= $_POST['nivel_de_permissao']??'';
    $nomedeusuario =$_POST['nome_de_usuario']??'';
    $senhadeacesso =$_POST['senha_de_acesso']??'';

    nomeExiste($nomecompleto);
    usuarioExiste($nomedeusuario);
    codigoExiste($numeroderegistro);
    cadastrarNovoUsuario($nomecompleto, $numeroderegistro, $niveldepermissao, $nomedeusuario, $senhadeacesso);

    function nomeExiste($nomecompleto){

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

        if(!$conexao){
            die("<h1>erro</h1>".mysqli_connect_error());
        }

        
        $sql ="select nomecompleto from tbcadastronovousuario where nomecompleto ='$nomecompleto'";

        $resultado = mysqli_query($conexao,$sql);

        if($resultado && mysqli_num_rows($resultado)>0){

        mysqli_close($conexao);
        $_SESSION['erro_nomecompleto']="Ja existe cadastro para esse nome";
       header('Location:FormularioCadastroNovoUsuario.php');
        exit;
        }
        mysqli_close($conexao);
    }


    function usuarioExiste($nomedeusuario){

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        
        if(!$conexao){
            die("<h1>erro".mysqli_connect_error());
        }
       $sql=  " select nomeusuario FROM tbcadastronovousuario WHERE nomeusuario ='$nomedeusuario'";

       $resulto = mysqli_query($conexao,$sql);
       
       if($resulto && mysqli_num_rows($resulto)>0){
            mysqli_close($conexao);
            $_SESSION['erro_cadastro'] = "Usuário já existe!";
            header('Location:FormularioCadastroNovoUsuario.php');
            exit;
        } 
         mysqli_close($conexao);
    }
    
    


    function codigoExiste($numeroderegistro){

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if(!$conexao){
        die("<h1>ERRO</h1>".mysqli_connect_error());
        }
        $sql =" select numeroregistro from tbcadastronovousuario where numeroregistro ='$numeroderegistro'";

        $resultado = mysqli_query($conexao,$sql);

        if($resultado && mysqli_num_rows($resultado)>1){
            mysqli_close($conexao);
            $_SESSION['Existenumero']="Ja existe usuario com esse numero";
            header('Location:FormularioCadastroNovoUsuario.php');
            exit;
        }
        mysqli_close($conexao);

    }

    
    function cadastrarNovoUsuario($nomecompleto, $numeroderegistro, $niveldepermissao, $nomedeusuario, $senhadeacesso){
        
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        if (!$conexao) {
            die ("<h1>erro<h1>". mysqli_connect_error());
        }
        $slq = "insert into tbcadastronovousuario (nomeCompleto, numeroRegistro, nivelPermisao, nomeUsuario,senhaAcesso)
        values ('$nomecompleto','$numeroderegistro' ,'$niveldepermissao', '$nomedeusuario', '$senhadeacesso')";
        $resultado = mysqli_query($conexao ,$slq);
        if ($resultado){
            mysqli_close($conexao);
            //Se deu certo, redireciona IMEDIATAMENTE
            echo 'Cadastrado com sucesso';
            header('Refresh: 2; url=index.php');
            exit;
        }else{
            mysqli_close($conexao);
            echo "Deu algum problema";
            exit;
        }
        mysqli_close($conexao);
    }

?>
