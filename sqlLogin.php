<?php
    session_start();

    $nomedeusuario =$_POST['nome_de_usuario']??'';
    $senhadeacesso =$_POST['senha_de_acesso']??'';
   
    
    /*abri conexao*/ 
    try {

        $conexao = mysqli_connect("localhost","root","","bdprojetosenac");
        }catch (mysqli_sql_exception $e)
        {
            die ($e->getMessage()."<h1>Erro</h1>
            <p>Verifique se o Banco de Dados esta conectado corretamente</p> <a href='index.php'>Voltar</a>" );
        
        }
          #inserir os dados


        $slq = "select nomeCompleto, numeroRegistro,nomeusuario, senhaacesso from tbcadastronovousuario where nomeUsuario = '$nomedeusuario' and SenhaAcesso='$senhadeacesso'";
        
        $resultado = mysqli_query($conexao ,$slq);

        if ($resultado && mysqli_num_rows($resultado) == 1 ) {
            
            $resultado = mysqli_fetch_assoc($resultado);

            //echo "<pre>"; print_r($resultado); echo "</pre>"; exit;

            $_SESSION['id_usuario'] = $resultado['numeroRegistro'];
            $_SESSION ['nome'] = $resultado['nomeCompleto'];
            mysqli_close($conexao);
            

            echo   $_SESSION['id_usuario'];
            echo $_SESSION ['nome'];

            // Se deu certo, redireciona IMEDIATAMENTE
            header('Location: navegacao.php');
            exit; // Esse 'exit' é obrigatório para a página parar aqui e o redirecionamento funcionar
            
        }
        else {
            mysqli_close($conexao);
            $_SESSION['login']="Dados incorretos";
            header('Location:index.php');
            exit;
        }
   

?>
