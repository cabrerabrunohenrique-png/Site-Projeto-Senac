<?php

    session_start();


    $nomecompleto =$_POST['nome_completo']??'';
    $numeroderegistro =$_POST['numero_de_registro']??'';
    $niveldepermissao= $_POST['nivel_de_permissao']??'';
    $nomedeusuario =$_POST['nome_de_usuario']??'';
    $senhadeacesso =$_POST['senha_de_acesso']??'';
   

    

    function usuarioExiste($nomedeusuario){
        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");

            if(!$conexao){
                die("<h1>erro".mysqli_connect_error());
            }


            $sql=  " select nomeusuario FROM tbcadastronovousuario WHERE nomeusuario ='$nomedeusuario'";

            $resulto = mysqli_query($conexao,$sql);

            if($resulto && mysqli_num_rows($resulto)==1){

            mysqli_close($conexao);
            $_SESSION['erro_cadastro'] = "Usuário já existe!";
           // echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Usuário ja existe!</h1>";
            header('Location:FormularioCadastroNovoUsuario.php');
            exit;

            
           /* echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > 
                    <div class=''>
                    
                        
                        <a class='cp caixa  fontemenu' href='index.php'>
                        Voltar
                        </a>
                    </div>
                    </div>";
                    echo "<h1 class='letraFundoAzul  text-bg-info fontemenu le' >Usuário ja existe!</h1>";
            exit;*/
        } 

    }
    usuarioExiste($nomedeusuario);


    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "insert into tbcadastronovousuario (nomecompleto, numeroregistro, nivelpermisao, nomeusuario,senhaacesso)
    values ('$nomecompleto','$numeroderegistro' ,'$niveldepermissao', '$nomedeusuario', '$senhadeacesso' )";
    

    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        echo 'Cadastrado com sucesso';
        header('Refresh: 2; url=index.php');
        exit;
        
        
    }
    else {
        mysqli_close($conexao);
        echo "Deu algum problema";
        exit;
    }


    

   
    #fechar conexao

    



?>
