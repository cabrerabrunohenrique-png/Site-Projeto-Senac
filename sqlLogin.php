<?php

    $nomedeusuario =$_POST['nome_de_usuario']??'';
    $senhadeacesso =$_POST['senha_de_acesso']??'';
   
    
    /*abri conexao*/ 

    $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
    if (!$conexao) {
        die ("<h1>erro<h1>". mysqli_connect_error());
    }

    #inserir os dados


    $slq = "select nomeusuario, senhaacesso from tbcadastronovousuario where nomeUsuario = '$nomedeusuario' and SenhaAcesso='$senhadeacesso'";
    
    $resultado = mysqli_query($conexao ,$slq);

    if ($resultado && mysqli_num_rows($resultado) == 1 ) {
        mysqli_close($conexao);
        // Se deu certo, redireciona IMEDIATAMENTE
        header('Location: navegacao.php');
        exit; // Esse 'exit' é obrigatório para a página parar aqui e o redirecionamento funcionar
        
    }
    else {
        mysqli_close($conexao);
       
        echo"<link rel ='stylesheet' href='css/style.css'> <div style='display: flex; justify-content: center;' > <div class='box_cinza_claro'>
        
             <!-- link para acessar -->
            <a class='box_letra' href='index.php'>
            Voltar
            </a>
        </div>
        </div>";
        echo "<h1 class='box_letra' >Usuário ou senha incorretos!</h1>";
        exit;
    }

   
    #fechar conexao

    



?>
